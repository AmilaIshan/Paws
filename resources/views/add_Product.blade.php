

@extends('layouts.adminlayout')
@section('content')
<div class="flex justify-content items-center ">
    <div class="flex flex-col md:flex-row w-full justify-center items-center  p-4">

    <div class="bg-primary md:w-[400px] lg:w-[700px] h-[900px] lg:h-[1000px] p-2 flex flex-col justinfy-content rounded-lg">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Product Name:</label>
            <input name="product_name" type="text" class=" md:w-[350px] lg:w-[600px] h-[40px] m-2 p-2 rounded-sm">
            </div>
            
            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Product Category:</label>
            <select name="category" id="" class="md:w-[350px] lg:w-[600px] h-[40px] m-2 rounded-sm">
            <option disabled selected value> -- select an option -- </option>
                <option value="Dog food">Dog Food</option>
                <option value="Cat food">Cat Food</option>
                <option value="Clothes">Clothes</option>
            </select>
            </div>


            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Stock keeping Unit (SKU):</label>
            <input name="sku" type="number" min=1 class=" md:w-[350px] lg:w-[600px] h-[30px] m-2 p-2 rounded-sm">
            </div>


            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Price:</label>
            <input name="price" type="number"  min=1 class=" md:w-[350px] lg:w-[600px] h-[30px] m-2 p-2 rounded-sm">
            </div>

            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Discount:</label>
            <input name="discount" type="number"  class=" md:w-[350px] lg:w-[600px] h-[30px] m-2 p-2 rounded-sm">
            </div>
            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Description: </label>
            <textarea name="description" class=" md:w-[350px] lg:w-[600px] h-[150px] m-2 p-2 rounded-sm" id=""></textarea>
            </div>
            <div class="flex flex-col">
            <label for="" class="text-lg font-semibold m-4 ">Image: </label>
            <input name="image" type="file" accept="image/*">
            </div>
            

            <button class="bg-white m-2 mt-11 font-semibold w-[350px] border-2 border-yellow-500">ADD</button>
        </form>
        
</div>


</div>
    </div>
@endsection