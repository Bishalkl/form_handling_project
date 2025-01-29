<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with View and Update Buttons</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto mt-10 p-5">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">User Table</h2>
        <div class="mb-6">
            <a href="{{route('add.form')}}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition duration-200 transform hover:scale-105">
                <i class="fas fa-plus"></i> Add New
            </a>
        </div>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg table-auto">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-700 font-semibold text-sm sm:text-lg">Name</th>
                        <th class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-700 font-semibold text-sm sm:text-lg">Email</th>
                        <th class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-700 font-semibold text-sm sm:text-lg hidden sm:table-cell">Age</th> <!-- Hide on small screens -->
                        <th class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-700 font-semibold text-sm sm:text-lg hidden sm:table-cell">City</th> <!-- Hide on small screens -->
                        <th class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-700 font-semibold text-sm sm:text-lg text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $id => $user)
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-600 text-sm sm:text-lg">{{$user->name}}</td>
                        <td class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-600 text-sm sm:text-lg">{{$user->email}}</td>
                        <td class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-600 text-sm sm:text-lg hidden sm:table-cell">{{$user->age}}</td> <!-- Hide on small screens -->
                        <td class="px-4 py-3 sm:px-6 sm:py-4 border-b text-gray-600 text-sm sm:text-lg hidden sm:table-cell">{{$user->city}}</td> <!-- Hide on small screens -->
                        <td class="px-4 py-3 sm:px-6 sm:py-4 border-b text-center">
                            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 justify-center">
                                <a href="{{route('view.user', $user->id)}}" class="bg-blue-500 text-white px-4 py-2 sm:px-6 sm:py-3 rounded-md hover:bg-blue-600 transition duration-200 transform hover:scale-105" aria-label="View details for {{$user->name}}">
                                    <i class="fas fa-eye"></i> <span class="hidden sm:inline">View</span>
                                </a>
                                <a href="{{route('delete.user', $user->id)}}" class="bg-red-500 text-white px-4 py-2 sm:px-6 sm:py-3 rounded-md hover:bg-red-600 transition duration-200 transform hover:scale-105" aria-label="Delete user {{$user->name}}">
                                    <i class="fas fa-trash"></i> <span class="hidden sm:inline">Delete</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
