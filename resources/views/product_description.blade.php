
@extends('layouts.adminlayout')

@section('content')

<div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Product Details</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')  Specify the HTTP method for updating 
             <div class="bg-white p-4 border rounded">
                <h2 class="text-xl font-semibold mb-4">{{ $product->product_name }}</h2>
                <p><strong>Name: </strong><input type="text" name="product_name" value="{{ $product->product_name }}" class="mb-2 text-center"></p>
                <p class="text-gray-700 mb-2"><strong>Category:</strong> <input type="text" name="category" value="{{ $product->category }}" class="text-center"></p>
                <p class="text-gray-700 mb-2"><strong>SKU:</strong><input type="number" name="sku" class="mb-2 mr-2 text-center" value="{{ $product->sku }}"></p>
                
                <p class="text-gray-700 mb-2"><strong>Description:</strong></p>
                <textarea name="description" class="w-full md:w-[300px] lg:w-[700px] p-2 border rounded" rows="10">{{ $product->description }}</textarea>
                
                <div class="mb-4">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-32 h-32 object-cover">
                    @else
                        No Image
                    @endif
                </div>
                <a href="{{route('list')}}" class="bg-gray-400 text-white px-4 py-2 rounded">Back to List</a>
                <button type="submit" class="bg-yellow-400 text-white px-4 py-2 rounded">Save Changes</button>
            </div>
        </form>
    </div>
@endsection