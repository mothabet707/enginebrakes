<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;
use App\Http\Resources\WorkshopResource;
use App\Http\Resources\WorkshopCollection;
use App\Http\Requests\CreateWorkshopRequest;

class WorkshopController extends Controller
{
    public function workshopsOfUser(){
        return new WorkshopCollection(Workshop::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate());
    }

    public function workshop($id){
        return new WorkshopResource(Workshop::where('user_id', auth()->user()->id)->where('id', $id)->firstOrFail());
    }

    public function workshopItems($id){
        return ItemResource::collection( Workshop::where('user_id', auth()->user()->id)->where('id', $id)->firstOrFail()->items );
    }

    public function create(CreateWorkshopRequest $request){
        $workshop = new Workshop();
        $workshop->name = $request->name;
        $workshop->address = $request->address;
        $workshop->is_online = $request->is_online??false;
        $workshop->city_id = $request->city_id;
        $workshop->user_id = auth()->user()->id;
        $workshop->save();
        
        return response(['msg'=>'Created.', 'data'=>new WorkshopResource($workshop)]);
    }
}
