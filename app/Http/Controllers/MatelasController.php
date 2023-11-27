<?php

namespace App\Http\Controllers;

use App\Models\Matela;
use Illuminate\Http\Request;

class MatelasController extends Controller
{
    public function show($id)
    {
        $matela = Matela::findOrFail($id); // Select * from movie where id = :id OU 404

        return view('show', ['matela' => $matela]);
    }

    public function create()
    { 
        return view('create', [
            'brand' => ['EPEDA', 'DREAMWAY', 'BULTEX', 'DORSOLINE', 'MEMORYLINE'],
            'matelas' => Matela::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'brand' => 'required|min:5|max:20',
            'price' => 'required|integer|min:100|max:1000',
            'discount' => 'nullable|integer|min:10|max:90',
            'height' => 'required|min:6|max:7',
            'image' => 'required|url',
        ]);

        $matela = new Matela();
        $matela->name = $request->name;
        $matela->brand = $request->brand;
        $matela->price = $request->price;
        $matela->discount = $request->discount;
        $matela->height = $request->height;
        $matela->image = $request->image;
        $matela->save();

        return redirect('/');
    }
}
