@extends('layouts.userlayout')
@section('content')

<h3 class="text-center mt-10 font-bold text-[32px] ">Dog Food</h3>
<hr>
<div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10 mb-48 justify-items-center">

    
        @foreach($clothe as $product)
            <div class="w-[300px] h-[400px] bg-white shadow-orange mb-24 leading-7 p-4 cursor-pointer rounded-md flex flex-col items-center text-center
            transform transition-transform duration-300 hover:scale-110 hover:shadow-lg">
            
                <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="w-48 h-48 object-cover  mb-4">

            
                <h4 class="font-semibold text-lg mb-2">{{ $product->product_name }}</h4>

                
                <p class="text-black mb-2 text-[18px]">Price: <strong class="text-primary"> ${{ $product->price }}</strong></p>

            
                <p class="text-gray-500 mb-2">Quantity: {{ $product->sku }}</p>

                
                <button class="mt-auto bg-secondary text-white font-semibold py-2 px-6 w-full hover:bg-primary">
                    Add to Cart
                </button>
            </div>
        @endforeach

</div>



@endsection