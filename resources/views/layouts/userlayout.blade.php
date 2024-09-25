<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-poppins bg-third">
<nav class="p-2" style="background-color: #FFA500;">
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span class="mr-24 hidden custom-lg:flex"><img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 50px; height: auto;"></span>
            
            
            <span class="custom-lg:hidden" onclick="toggleMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>


            <ul class="hidden custom-lg:flex space-x-10 text-black text-lg font-semibold">
                <li><a href="{{route('home')}}" class="hover:bg-white hover:bg-opacity-25 px-4 py-2 rounded">Home</a></li>
                <li><a href="{{route('cat')}}" class="hover:bg-white hover:bg-opacity-25 px-4 py-2 rounded">Cat</a></li>
                <li><a href="{{route('dog')}}" class="hover:bg-white hover:bg-opacity-25 px-4 py-2 rounded">Dog</a></li>
                <li><a href="{{route('clothe')}}" class="hover:bg-white hover:bg-opacity-25 px-4 py-2 rounded">Clothes</a></li>
                <li><a href="#" class="hover:bg-white hover:bg-opacity-25 px-4 py-2 rounded">About Us</a></li>
            </ul>
        </div>

        <div class="flex items-center space-x-4">
            <div class=" md:flex relative">
                <input type="text" class="py-1 px-3 lg:h-10 md:h-8 md:w-[200px] sm:h-5 lg:w-[200px] sm:w-[100px] w-[150px] rounded-md bg-white-700 text-black placeholder-gray-400 focus:outline-none focus:ring focus:border-red-700" placeholder="Search...">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </span>
            </div>

            <!-- <span class="block md:hidden text-black-400 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zm0 1a8 8 0 1 0 0 16A8 8 0 0 0 9 1z"/>
                    <path fill-rule="evenodd" d="M11.818 11.819a1 1 0 0 1-1.415 1.414l-2.12-2.12a3.5 3.5 0 1 1 4.95-4.95l2.12 2.12a1 1 0 1 1-1.414 1.415l-2.12-2.12a1.5 1.5 0 1 0-2.122 2.122l2.12 2.12z"/>
                </svg>
            </span> -->

            <!-- Cart Icon -->
            <!-- <span class="text-red-600 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </span> -->

            <span class="text-black cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>

            </span>

            <!-- <span class="relative text-black cursor-pointer" onclick="toggleDropdown()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 mr-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <div></div>
                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden">
                    
                    <a href="{{route('login')}}" class="block px-4 py-2 text-black hover:bg-gray-200">Login</a>
                    <a href="{{route('register')}}" class="block px-4 py-2 text-black hover:bg-gray-200">Register</a>
                </div>
            </span> -->

            <span class="relative text-black cursor-pointer" onclick="toggleDropdown()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 mr-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                

                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden">
                    @auth
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="block px-4 py-2 text-black hover:bg-gray-200">Logout</a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Login</a>
                        <a href="{{ route('register') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Register</a>
                    @endauth
                </div>
            </span> 

        </div>
    </div>
</nav>


<!-- Side Menu -->
<div id="side-menu" class="fixed top-0 left-0 w-2/3 h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="p-4">
        
        <span class="cursor-pointer" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span>

        
        <ul class="mt-6 space-y-4 text-black text-lg font-semibold">
            <li><a href="{{route('home')}}" class="hover:bg-gray-200 block px-4 py-2 rounded">Home</a></li>
            <li><a href="{{route('cat')}}" class="hover:bg-gray-200 block px-4 py-2 rounded">Cat</a></li>
            <li><a href="{{route('dog')}}" class="hover:bg-gray-200 block px-4 py-2 rounded">Dog</a></li>
            <li><a href="{{route('clothe')}}" class="hover:bg-gray-200 block px-4 py-2 rounded">Clothes</a></li>
            <li><a href="#" class="hover:bg-gray-200 block px-4 py-2 rounded">About Us</a></li>
        </ul>
    </div>
</div>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
        console.log("Dropdown toggled");
    }

    // Close dropdown if clicking outside
    window.onclick = function(event) {
        const dropdown = document.getElementById('dropdown');
        if (!event.target.closest('.cursor-pointer')) {
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        }
    }
    function toggleMenu() {
        const sideMenu = document.getElementById('side-menu');
        console.log('hello');
        sideMenu.classList.toggle('-translate-x-full');
        console.log("Side menu toggled");
    }
</script>
@yield('content')

</body>
</html>
