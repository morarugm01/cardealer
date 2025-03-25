<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VehicleModelResource;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function index($id) 
    {
        $models = VehicleModel::where('manufacturer_id', $id)->get();

        return VehicleModelResource::collection($models);
    }
}
