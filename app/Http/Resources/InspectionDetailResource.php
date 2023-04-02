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
            'component' => ComponentResource::make($this->component),
            'grade' => GradeResource::make($this->grade),
        ];
    }
}
