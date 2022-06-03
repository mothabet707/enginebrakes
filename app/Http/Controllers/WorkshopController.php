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
    public function workshops(Request $request){
        return new WorkshopCollection(Workshop::orderBy('id', 'DESC')->paginate());
    }

    public function workshop($id){
        return new WorkshopResource(Workshop::findOrFail($id));
    }

    public function workshopItems($id){
        return ItemResource::collection( Workshop::findOrFail($id)->items );
    }

    public function create(CreateWorkshopRequest $request){
        $workshop = new Workshop();
        $workshop->name = $request->name;
        $workshop->address = $request->address;
        $workshop->is_online = $request->is_online??false;
        $workshop->city_id = $request->city_id;
        $workshop->user_id = auth()->user()->id;
        $workshop->save();

        // if($request->hasFile)
        
        return response(['msg'=>'Created.', 'data'=>new WorkshopResource($workshop)]);
    }
}
