<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkshopResource extends JsonResource
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
            'address' => $this->address,
            'is_online' => $this->is_online,
            'city' => $this->city->name,
            'city_id' => $this->city_id,
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
