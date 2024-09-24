@extends('layouts.adminlayout')
@section('content')

<div class="flex justify-content items-center ">
    <div class="flex flex-col md:flex-row w-full justify-center items-center p-4">

        <div class="bg-primary shadow-lg md:w-[700px] lg:w-[700px] h-[500px] lg:h-[500px] p-2 flex flex-col justify-content rounded-lg">
            <form id="addUser" action="{{ route('createAdmin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col">
                <label for="" class="text-lg font-semibold m-4 ">Name: </label>
                <input name="name" type="text" class="md:w-[350px] lg:w-[550px] h-[30px] m-2 p-2 rounded-sm">
                </div>
                <div class="flex flex-col">
                <label for="" class="text-lg font-semibold m-4 ">Email: </label>
                <input name="email" type="text" class="md:w-[350px] lg:w-[550px] h-[30px] m-2 p-2 rounded-sm">
                </div>
                <div class="flex flex-col">
                <label for="" class="text-lg font-semibold m-4 ">Password: </label>
                <input name="password" type="password" class="md:w-[350px] lg:w-[550px] h-[30px] m-2 p-2 rounded-sm">
                </div>
                
                <br>
               
               

                <div class="flex lg:flex-row md:flex-col sm:flex-col justify-end">
                    <button type="submit" class="bg-white m-2 mt-11 font-semibold w-[350px] border-2 border-yellow-500">ADD</button>
                    <button type="button" onclick="clearform()" class="bg-white m-2 mt-11 font-semibold w-[350px] border-2 border-yellow-500">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
