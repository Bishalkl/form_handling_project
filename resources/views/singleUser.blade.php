<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto mt-10 p-5">
        @foreach ($data as $id => $user)
            <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg p-5">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">User Details</h2>
                <div class="space-y-4">
                    <p class="text-gray-700"><strong>Name:</strong> {{$user->name}}</p>
                    <p class="text-gray-700"><strong>Email:</strong> {{$user->email}}</p>
                    <p class="text-gray-700"><strong>Age:</strong> {{$user->age}}</p>
                    <p class="text-gray-700"><strong>City:</strong> {{$user->city}}</p>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{route('edit.user')}}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">
                        Edit Details
                    </a>
                    <a href="{{route('home')}}" class="bg-yellow-500 ml-4 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition duration-200">
                        Return Home
                    </a>
                </div>
            </div>
        </div>
        @endforeach

</body>
</html>
