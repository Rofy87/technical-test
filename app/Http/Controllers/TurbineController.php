<?php

namespace App\Http\Controllers;

use App\Http\Resources\TurbineResource;
use App\Models\Turbine;


class TurbineController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TurbineResource::collection(Turbine::with('farm')->get());
    }


    /**
     * @param int $id
     * @return TurbineResource
     */
    public function show(int $id)
    {
        $inspection = Turbine::with('components')->findOrFail($id);
        return new TurbineResource($inspection);
    }

}
