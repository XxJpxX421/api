<?php

namespace App\Http\Controllers;

use App\Models\TrainerModel;
use Illuminate\Http\Request;

class TrainerModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainer = TrainerModel::all();
        return response()->json($trainer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => ["string"],
            "age" => ["integer"],
            "height" => ["string"],
            "weight" => ["string"],
            "CPF" => ["string"], 
            "RG" => ["string"], 
        ]);

        $trainer = TrainerModel::create($validatedData);

        return response()->json($trainer, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TrainerModel $trainerModel)
    {
        $trainer = TrainerModel::find($id);

        if(!$trainer){
            return response()->json(["message" => 'Trainer not found'], 404);
        }
        return response()->json($trainer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainerModel $trainerModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrainerModel $trainerModel)
    {
        $trainer = TrainerModel::find($id);

        if(!$trainer){
            return response()->json(["message" => 'Trainer not found'], 404);
        }

        $validatedData = $request->validate([
            "name" => ["string"],
            "age" => ["integer"],
            "height" => ["string"],
            "weight" => ["string"],
            "CPF" => ["string"], 
            "RG" => ["string"], 
        ]);

        $trainer->update($validatedData);

        return response()->json($trainer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainerModel $trainerModel)
    {
        $trainer = TrainerModel::find($id);

        if(!$trainer){
            return response()->json(["message" => 'Trainer not found'], 404);
        }

        $trainer->delete();

        return response()->json(["message" => 'Trainer deleted successfully'], 200);
    }
}
