<?php

namespace App\Http\Controllers;

use App\Models\Matela;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home' ,[
            'matelas' => Matela::all()
        ]);
    }

    public function create()
    {
        return view('create');
    }

}
