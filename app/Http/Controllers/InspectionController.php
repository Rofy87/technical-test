<?php

namespace App\Http\Controllers;

use App\Http\Resources\InspectionResource;
use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return InspectionResource::collection(Inspection::with('turbine')->paginate(2));
    }


    /**
     * @param Inspection $inspection
     * @return InspectionResource
     */
    public function show(int $id)
    {
        $inspection = Inspection::with('inspectionDetails')->findOrFail($id);
        return new InspectionResource($inspection);
    }

}
