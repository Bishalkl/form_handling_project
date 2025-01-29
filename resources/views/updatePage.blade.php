<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto mt-10 p-5">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Update User</h2>

        <!-- Update User Form -->
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
            <form action="{{ route('update.user', $data->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ $data->name }}" placeholder="Enter name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        required />
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ $data->email }}" placeholder="Enter email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        required />
                </div>

                <!-- Age Field -->
                <div>
                    <label for="age" class="block text-lg font-medium text-gray-700 mb-2">Age</label>
                    <input type="number" id="age" name="age" value="{{ $data->age }}" placeholder="Enter age"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        required />
                </div>

                <!-- City Field -->
                <div>
                    <label for="city" class="block text-lg font-medium text-gray-700 mb-2">City</label>
                    <input type="text" id="city" name="city" value="{{ $data->city }}" placeholder="Enter city"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        required />
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition duration-200 transform hover:scale-105">
                        <i class="fas fa-edit"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
