<?php

namespace App\Http\Resources;

use App\Models\Farm;
use App\Models\InspectionDetail;
use Illuminate\Http\Resources\Json\JsonResource;

class TurbineResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'farm' => $this->farm->name,
            'components'=>ComponentResource::collection($this->whenLoaded('components')),

        ];

    }
}
