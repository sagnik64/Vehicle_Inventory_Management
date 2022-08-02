<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $vehicle = Vehicle::create($request->all());
        if($vehicle) {
            return response()->json([
                "success" => "true",
                "code" => 201,
                "message" => "Vehicle data saved successfully",
                "data" => $vehicle
            ],201);
        }
        return response()->json([
            "success" => "false",
            "code" => 400,
            "message" => "Failed to save vehicle data"
        ],400);
    }
}
