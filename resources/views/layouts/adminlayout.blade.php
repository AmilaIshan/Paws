<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <style>
        
        .sidebar {
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-white font-poppins">
        <div class="sidebar fixed top-0 left-0 h-full w-64 bg-yellow-100 text-yellow-500 p-4">
            <h2 class="text-xl font-semibold mb-24">
            <!-- <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg> -->
                Admin Panel</h2>
            
            <div class="p-2.5 mt-3 mb-6 flex items-center rounded-md px-4 cursor-pointer bg-yellow-200">
            <svg class="w-6 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
  
            <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full p-1 focus:outline-none bg-transparent text-black">      
            </div>       
                 

            <ul class="space-y-2">

                <li><a href="{{route('list')}}" class="flex items-center mb-6 py-2 px-4 hover:bg-white font-semibold rounded text-lg">
                    <svg class="w-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"          stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                Product List</a></li>


                <li>
                    <a href="{{route('addproduct')}}" class="flex items-center py-2 mb-6 px-4 hover:bg-white font-semibold rounded text-lg">
                    <svg class="w-6 mr-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    Add Product</a>
                </li>

                <li>
                    <a href="{{route('adminList')}}" class="flex items-center py-2 mb-6 px-4 hover:bg-white font-semibold rounded text-lg">
                    <svg class="w-6 mr-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>

                    User List</a>
                </li>



                <li>
                    <a href="{{route('add')}}"  class="flex items-center py-2 mb-6 px-4 hover:bg-white font-semibold rounded text-lg">
                    <svg class="w-6 mr-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
    
                    Add User</a>
                </li >
                <div class="bg-red-400 text-white">
                <form method="POST"  action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                </div>
                
                <li>

                </li>
            



            </ul>
        </div>

    <div class="ml-64 p-6">
        <!-- Main content area -->
        <h1 class="text-3xl font-semibold">Welcome to the Admin Dashboard</h1>
        <p class="mt-4">Here you can manage products and users.</p>
    </div>
    <div class="ml-64 p-6"> 
         @yield('content')
    </div>
    
</body>
</html>
