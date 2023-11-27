@extends('layouts.app')

{{-- On prend le contenu de layouts/app.blade.php --}}
{{-- Le contenu de la section content va prendre
    la place du yield content --}}
@section('content')
<div class="flex">
<div>
    <h1 class="h-1/2 text-3xl text-center mb-8">Liste des marques :</h1>
</div>

    <div class="w-full flex row flex-wrap">
        <hr>
        @foreach ($brands as $brand)
            <div class="w-1/2 ">
                <div class="flex flex-col justify-between w-1/2 h-1/2">
                       
                                <h1 class="py-2 text-center text-3xl">{{ $brand->name }}</h1>
                                <img class="mb-3 h-[300px] object-cover rounded-lg shadow-xl shadow-black w-full"  src="{{ $brand->image }}" alt="">
                         

            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection