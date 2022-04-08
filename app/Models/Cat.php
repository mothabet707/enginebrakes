<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Cat extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;

    public function items(){
        return $this->belongsToMany(Item::class, 'item_cat');
    }
}
