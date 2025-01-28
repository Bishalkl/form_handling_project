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

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg table-auto">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="px-6 py-4 border-b text-gray-700 font-semibold text-lg">Name</th>
                        <th class="px-6 py-4 border-b text-gray-700 font-semibold text-lg">Email</th>
                        <th class="px-6 py-4 border-b text-gray-700 font-semibold text-lg">Age</th>
                        <th class="px-6 py-4 border-b text-gray-700 font-semibold text-lg">City</th>
                        <th class="px-6 py-4 border-b text-gray-700 font-semibold text-lg text-center">Actions</th> <!-- Align actions header -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $id => $user)
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="px-6 py-4 border-b text-gray-600 text-lg">{{$user->name}}</td>
                        <td class="px-6 py-4 border-b text-gray-600 text-lg">{{$user->email}}</td>
                        <td class="px-6 py-4 border-b text-gray-600 text-lg">{{$user->age}}</td>
                        <td class="px-6 py-4 border-b text-gray-600 text-lg">{{$user->city}}</td>
                        <td class="px-6 py-4 border-b text-center"> <!-- Align actions content -->
                            <a href="{{route('view.user', $user->id)}}" class="bg-blue-500 text-white px-6 py-3 rounded-md mr-2 hover:bg-blue-600 transition duration-200 transform hover:scale-105" aria-label="View details for {{$user->name}}">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{route('delete.user', $user->id)}}" class="bg-red-500 text-white px-6 py-3 rounded-md mr-2 hover:bg-red-600 transition duration-200 transform hover:scale-105" aria-label="Delete user {{$user->name}}">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
