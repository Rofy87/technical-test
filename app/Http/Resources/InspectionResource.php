<?php

namespace App\Http\Resources;

use App\Models\InspectionDetail;
use Illuminate\Http\Resources\Json\JsonResource;

class InspectionResource extends JsonResource
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
            'turbine_name' => $this->turbine->name,
            'turbine_longitude' =>$this->turbine->longitude,
            'turbine_latitude' =>$this->turbine->latitude,
            'farm_name' => $this->turbine->farm->name,
            'inspection_date' => (string)$this->inspection_date,
            'note' => $this->note,
            'inspectionDetails'=>InspectionDetailResource::collection($this->whenLoaded('inspectionDetails')),
        ];
    }
}
