@extends('layouts.app')

@section('content')
    <div class="md:flex items-center gap-6">
        <img class="w-full md:w-64 mb-12 md:mb-0 shadow-lg" src="{{ $matela->image }}" alt="{{ $matela->name }}">
        <div class ="">
            <a href="/" class="text-gray-500 flex gap-2 mb-3">
                Retour aux matelas
            </a>
            <h1 class="text-5xl font-bold text-gray-900 mb-3">{{ $matela->name }}</h1>
          
           <div class="w-full"> 
            <div class="w-1/3">
            <h2 class="italic text-2xl">{{ $matela->brand }}</h2> 
            </div>
             <div  class="w-1/3">
            <h2 class="italic">{{ $matela->price }} euros</h2>
            </div>
            <div  class="w-1/3">
                <h2 class="italic">{{ $matela->height }} cm</h2>
                </div>
            </div>
           
        </div>
    </div>
@endsection