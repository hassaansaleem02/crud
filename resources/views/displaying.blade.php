<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Dummy Navbar</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="mr-5 hover:text-gray-900">Fourth Link</a>
            </nav>
        </div>
    </header>





    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">

            <div class="flex md:mt-4 mt-6 p-5">
                <form action="{{ route('registerview') }}" method="GET">
                    <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">CREATE</button>
                </form>
            </div>

            <div class="flex md:mt-4 mt-6 p-5">
                <form action="{{ route('deleteview') }}" method="get">
                    <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">DELETE</button>
                </form>
            </div>

            <div class="flex md:mt-4 mt-6 p-5">
                <form action="{{ route('updateview') }}" method="get ">
                    <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">UPDATE</button>
                </form>
            </div>

        </div>
    </section>



    <section>
        @foreach ($users as $user)
        <div class="mb-10 text-center">
            <a href="" class="font-bold"> {{ $user->name }}</a> <span class="text-gray-500 text-sm">{{ $user->email}}</span>
            <p class="mb-1">ID:{{ $user->id }}</p>
            @endforeach
            {{ $users->links() }}
    </section>

</body>

</html>