@extends('layouts.adminlayout')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">User List</h1>
    <table class="table-auto w-full text-left border-collapse">
        <thead>
            <tr>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                
                <td class="border px-4 py-2">{{ $admin->name}}</td>
                <td class="border px-4 py-2">{{ $admin->email }}</td>
                <td class="border px-4 py-2">
                 
                    <a href="{{route('admin.show', $admin->id)}} " class="bg-blue-400 p-1 w-[100px] rounded-sm text-white text-center inline-block mr-4" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline h-4 w-4 mr-1">
                     <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
    
                    Edit</a>

                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this user?');">
                     @csrf
                     @method('DELETE')
                    <button type="submit" class="btn btn-danger bg-red-400 p-1 w-[100px] rounded-sm text-white text-center inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline h-4 w-4 mr-1">
                     <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>    
                    Delete</button>
                 </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection()