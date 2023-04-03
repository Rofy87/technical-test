<?php

namespace App\Http\Controllers;

use App\Http\Resources\FarmResource;
use App\Models\Farm;


class FarmController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return FarmResource::collection(Farm::all());
    }

}
