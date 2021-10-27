<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="h-screen bg-gray-100 flex justify-center">
        <div class="py-6 px-8 h-80 mt-20 bg-white rounded shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-gray-800 font-bold">Name:</label>
                    <input type="text" name="name" id="name" placeholder="username" class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
                </div>

                <div>
                    <label for="email" class="block text-gray-800 font-bold">Email:</label>
                    <input type="text" name="email" id="email" placeholder="@email" class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
                </div>

                <div>
                    <label for="password" class="block text-gray-800 font-bold">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
                </div>

                <button type="submit" class="cursor-pointer py-2 px-4 block mt-2 bg-indigo-500 text-white font-bold w-full text-center rounded">register</button>
            </form>
        </div>
    </div>

</body>

</html>