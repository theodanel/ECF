<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function game()
    {
    return $this->belongsTo(Matela::class);

    $brand = Matela::find(1);
    foreach ($brand->matelas as $matela) {
        $matelas = Brand::find(1)->games()->orderBy('name')->get();

        return $this->belongsToMany(Matela::class, 'game_tag');
        }
    }
}
