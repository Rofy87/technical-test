<?php

namespace App\Http\Resources;

use App\Models\Component;
use Illuminate\Http\Resources\Json\JsonResource;

class InspectionDetailResource extends JsonResource
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
            'serial_number' => $this->component->serial_number,
            'component_type' => $this->component->componentType->name,
            'grade_as_text' => $this->grade->named_value,
            'grade_as_number' => ($this->grade->integer_value)."/5",
        ];
    }
}
