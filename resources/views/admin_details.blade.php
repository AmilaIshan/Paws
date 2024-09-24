
@extends('layouts.adminlayout')

@section('content')

<div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Product Details</h1>
        <form action="{{ route('admin.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')  Specify the HTTP method for updating 
             <div class="bg-white p-4 border rounded">
                <h2 class="text-xl font-semibold mb-4">{{ $admin->name }}</h2>
                <p><strong>Name: </strong><input type="text" name="name" value="{{ $admin->name }}" class="mb-2 text-center"></p>
                <p class="text-gray-700 mb-2"><strong>Email:</strong> <input type="text" name="email" value="{{ $admin->email }}" class="text-center"></p>
                <p class="text-gray-700 mb-2"><strong>Password:</strong><input type="password" name="password" class="mb-2 mr-2 text-center" value="{{ $admin->password }}"></p>
                
    
                <a href="{{route('adminList')}}" class="bg-gray-400 text-white px-4 py-2 rounded">Back to List</a>
                <button type="submit" class="bg-yellow-400 text-white px-4 py-2 rounded">Save Changes</button>
            </div>
        </form>
    </div>
@endsection