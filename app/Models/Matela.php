<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matela extends Model
{
    use HasFactory;

    public function brand()
    {
    return $this->belongsTo(Brand::class);

    $brand = Brand::find(1);
    foreach ($brand->brands as $brand) {
        $matelas = Matela::find(1)->tags()->orderBy('name')->get();

        return $this->belongsToMany(Brand::class, 'matela_brand');
        }
    }
}
