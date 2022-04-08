<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'price_was' => $this->price_was,
            'condition' => $this->condition,
            'origin' => $this->origin,
            'is_available' => $this->is_available,
            'workshop' => $this->workshop_id? $this->workshop->name: null,
            'workshop_id' => $this->workshop_id?? null,
            'cats' => CatResource::collection($this->cats),
            'user' => $this->user->name,
            'user_id' => $this->user_id,
            'comments' => $this->comments,
            'rate' => [
                'avg' => $this->rates->avg('rate'),
                'rates' => $this->rates
            ]
        ];
    }
}
