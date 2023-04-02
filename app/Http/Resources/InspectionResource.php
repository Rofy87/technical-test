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
            'note' => $this->note,
            'inspection_date' => (string)$this->inspection_date,
            'turbine' => new TurbineResource($this->whenLoaded('turbine')),
            'inspectionDetails'=>InspectionDetailResource::collection($this->whenLoaded('inspectionDetails')),
        ];
    }
}
