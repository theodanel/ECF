@extends('layouts.app')

@section('content')
<div>
<h1 class="text-3xl text-center mb-3 font-bold underline">CATALOGUE</h1> 
<a class="text-xl hover:no-underline text-center font-bold underline  mb-3" href="/create">Ajoutez un matelas</a>
</div>

<div class="flex flex-col gap-3">
        @foreach ($matelas as $matela)
            <div class="w-full">
                <div class="flex flex-col justify-between h-full">
                    <a href="/matela/{{ $matela->id }}" class="mx-3 block group">
                        <div class="w-full flex">
                                <div class="w-1/2">
                                <img class="mb-3 h-[300px] object-cover rounded-lg shadow-xl shadow-black w-full"  src="{{ $matela->image }}" alt="">
                        </a>
                                </div>
                                <div class="w-1/2">
                                <div>  <h3 class="text-sm text-gray-600 underline group-hover:no-underline">{{ $matela->name }} </h3>| <h3> {{$matela->price}} euros </h3></div>

                                <a class="no-underline text-sm hover:font-bold flex flex-col" href="/matela/{{ $matela->id }}">En savoir plus</a>

                                <a class=" w-20 text-sm bg-red-500 text-gray-200 rounded px-2 py-1" href="/{{ $matela->id }}/supprimer" onclick="return confirm('Etes-vous sûr de vouloir supprimer le film {{$matela->title}} ? ')" >Supprimer</a>
                                <a class=" w-20 text-sm bg-blue-500 text-gray-200 rounded px-2 py-1" href="/{{ $matela->id }}/modifier" onclick="return confirm('Etes-vous sûr de vouloir supprimer le film {{$matela->title}} ? ')" >Modifier</a>
                        </div>
                
            </div>
            </div>
        @endforeach
    </div>

    <p class="text-lg text-center mb-3 font-bold ">Suite du catalogue en page 2...</p> 

@endsection