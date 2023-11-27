<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index ()
    {
        return view ('brands', [
            'brands' => Brand::all()
        ]);
    }
}
