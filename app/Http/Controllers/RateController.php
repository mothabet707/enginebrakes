<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use App\Http\Requests\RateRequest;
use App\Http\Requests\DeleteRateRequest;

class RateController extends Controller
{
    public function create(RateRequest $request){
        $ratable_type = $request->ratable_type;

        $rate = new Rate();
        $rate->ratable_type = "App\Models\\$ratable_type";
        $rate->ratable_id = $request->ratable_id;
        $rate->user_id = auth()->user()->id;
        $rate->rate = $request->rate;
        $rate->comment = $request->comment;
        $rate->save();

        return $rate;
    }

    public function delete(DeleteRateRequest $request){
        $rate = Rate::where('user_id', auth()->user()->id)->where('id', $request->rate_id)->first();
        if($rate){
            $rate->delete();
            return response(['msg'=>'deleted']);
        }
        else{
            return response(['msg'=>'Not found.'], 404);
        }
    }
}
