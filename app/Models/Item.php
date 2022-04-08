<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function workshop(){
        return $this->belongsTo(Workshop::class);
    }
    
    public function rates(){
        return $this->morphMany(Rate::class, 'ratable');
    }

    public function cats(){
        return $this->belongsToMany(Cat::class, 'item_cat');
    }
    
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
