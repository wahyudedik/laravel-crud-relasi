<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6">User Profile</h1>

            <div class="space-y-4">
                <div>
                    <label class="font-semibold">Name:</label>
                    <p>{{ $user->name }}</p>
                </div>

                <div>
                    <label class="font-semibold">Email:</label>
                    <p>{{ $user->email }}</p>
                </div>

                @if ($user->profile)
                    <div>
                        <h2 class="text-xl font-bold mt-6 mb-4">Profile Information</h2>
                        <!-- Add profile fields here based on your Profile model -->
                    </div>
                @endif

                <div>
                    <h2 class="text-xl font-bold mt-6 mb-4">Courses Enrolled</h2>
                    @if ($user->courses->count() > 0)
                        <ul class="list-disc pl-5">
                            @foreach ($user->courses as $course)
                                <li>{{ $course->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No courses enrolled yet.</p>
                    @endif
                </div>

                <div>
                    <h2 class="text-xl font-bold mt-6 mb-4">Posts</h2>
                    @if ($user->posts->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($user->posts as $post)
                                <div class="border rounded p-4">
                                    <h3 class="font-bold">{{ $post->title }}</h3>
                                    <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No posts created yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</body>

</html>
