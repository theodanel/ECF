<?php

namespace App\Http\Controllers;

use App\Models\Matela;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home' ,[
            'matelas' => Matela::all(),
        ]);
    }

    public function show($id)
    {
        $matela = Matela::findOrFail($id); // Select * from movie where id = :id OU 404

        return view('show', ['matela' => $matela]);
    }

    public function create()
    {
        return view('create');
    }

}
