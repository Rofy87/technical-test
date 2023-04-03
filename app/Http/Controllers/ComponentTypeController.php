<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComponentTypeResource;
use App\Models\ComponentType;


class ComponentTypeController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ComponentTypeResource::collection(ComponentType::all());
    }

}
