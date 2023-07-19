<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/indexstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Selamat Datang di This Is July</title>
</head>
<body class="h-[90vh]">
    <div class="w-full">
        <h2 class="text-center text-3xl mt-5">✿ Welcome dear ✿ </h2>
        <h1 class="text-center font-medium text-5xl"> This Is July</h1>
    </div>

    <nav class="h-full">
        <ul class="w-[90%] grid grid-cols-2 gap-10 mx-auto justify-center items-center   h-[80%]">
                <li class="mx-auto"><a href="/login" class="border col-span-1 border-1 text-[90px] w-full font-bold text-center p-[100px] border-black hover:text-white hover:bg-black transition-all duration-500  ">Login</a></li>
                <li class="mx-auto"><a href="/register" class="border col-span-1 border-1 text-[90px] w-full font-bold text-center p-[100px] hover:text-white hover:bg-black transition-all duration-500 border-black ">Register</a></li>
                
        </ul>
    </nav>
</body>
</html>


        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
                @include('footer')
            @endif --}}


           