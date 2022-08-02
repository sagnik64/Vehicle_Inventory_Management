<?php

namespace App\Http\Controllers;

use App\Models\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $specification = Specification::create($request->all());
        if($specification) {
            return response()->json([
                "success" => "true",
                "code" => 201,
                "message" => "Specification data saved successfully",
                "data" => $specification
            ],201);
        }
        return response()->json([
            "success" => "false",
            "code" => 400,
            "message" => "Failed to save specification data"
        ],400);
    }    
}
