<?php

namespace App\Http\Resources;

use App\Models\ComponentType;
use Illuminate\Http\Resources\Json\JsonResource;

class ComponentResource extends JsonResource
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
            'description' => $this->description,
            'serial_number' => $this->serial_number,
            'component_type' => ComponentTypeResource::make($this->componentType),
        ];
    }
}
