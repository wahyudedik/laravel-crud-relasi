<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::with('profiles')->paginate(10);

            if ($users->isEmpty()) {
                return view('users.index', [
                    'users' => $users,
                    'message' => 'No users found in the database'
                ]);
            }

            return view('users.index', [
                'users' => $users
            ]);
        } catch (\Exception $e) {
            return view('users.index', [
                'error' => 'An error occurred while fetching users: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create($validated);
        return redirect()->route('users.index', $user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('users.show', [
            'user' => User::with(['profiles', 'posts', 'courses'])->findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('users.edit', [
            'user' => User::with(['profiles', 'posts', 'courses'])->findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
