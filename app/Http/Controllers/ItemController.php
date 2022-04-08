<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;
use App\Http\Requests\CreateItemRequest;
use App\Http\Resources\ItemCollection;

class ItemController extends Controller
{
    public function itemsOfUser(){
        return new ItemCollection(Item::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate());
    }

    public function item($id){
        $item = Item::where('user_id', auth()->user()->id)->where('id', $id)->firstOrFail();
        return new ItemResource($item);
    }

    public function create(CreateItemRequest $request){
        if($request->workshop_id && !in_array($request->workshop_id, auth()->user()->workshops->pluck('id')->toArray())){
            return response(['msg'=>'Invalid workshop_id'], 422);
        }

        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->price_was = $request->price_was;
        $item->condition = $request->condition;
        $item->origin = $request->origin;
        $item->is_available = $request->is_available;
        $item->workshop_id = $request->workshop_id??null;
        $item->user_id = auth()->user()->id;
        $item->save();
        
        return response(['msg'=>'Created.', 'data'=>new ItemResource($item)]);
    }
}
