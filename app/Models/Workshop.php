<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workshop extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
    
    public function rates(){
        return $this->morphMany(Rate::class, 'ratable');
    }
    
    public function items(){
        return $this->hasMany(Item::class);
    }
    
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    
    public function photos(){
        return $this->morphMany(Photo::class, 'photable');
    }
}
