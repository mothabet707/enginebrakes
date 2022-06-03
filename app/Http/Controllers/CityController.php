<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;

class CityController extends Controller
{
    public function cities(){
        return CityResource::collection(City::all());
    }
}
