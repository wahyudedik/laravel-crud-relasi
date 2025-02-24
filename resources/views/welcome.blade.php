<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header class="bg-white shadow">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">Logo</div>
                <div class="flex space-x-4">
                    <a href="/users" class="text-gray-700 hover:text-gray-900">Users</a>
                    <a href="/profile" class="text-gray-700 hover:text-gray-900">Profile</a>
                    <a href="/posts" class="text-gray-700 hover:text-gray-900">Posts</a>
                    <a href="/courses" class="text-gray-700 hover:text-gray-900">Courses</a>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
