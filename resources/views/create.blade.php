@extends('layouts.app')

@section('content')
    <a href="/" class="text-gray-500">Retour aux matelas</a>
    <h1 class="text-3xl mb-3">Ajouter un matela dans le catalogue</h1>

    <form action="" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="block">Nom</label>
            <input type="text" name="name" id="name" value="name" class="rounded shadow border-gray-300 w-full">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="brand" class="block">Marque</label>
            <input type="text" name="brand" id="brand" value="brand" class="rounded shadow border-gray-300 w-full">
            @error('brand')
                <div class="text-red-500">{{ $message }}</div>  
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="block">Prix</label>
            <input type="text" name="price" id="price" value="price" class="rounded shadow border-gray-300 w-full">
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="discount" class="block">Remise</label>
            <input type="text" name="discount" id="discount" value="discount" class="rounded shadow border-gray-300 w-full">
            @error('discount')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="height" class="block">Dimensions</label>
            <input type="text" name="height" id="height" value="height" class="rounded shadow border-gray-300 w-full">
            @error('height')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="block">Image</label>
            <input type="text" name="image" id="image" value="image" class="rounded shadow border-gray-300 w-full">
            @error('image')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter</button>
    </form>




@endsection