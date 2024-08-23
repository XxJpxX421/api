<?php

namespace App\Http\Controllers;

use App\Models\LocaleModel;
use Illuminate\Http\Request;

class LocaleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = LocaleModel::all();
        return response()->json($locale);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "street" => ["string"],
            "district" => ["string"],
            "number" => ["string"], 
            "CEP" => ["string"],
            "city" => ["string"],
            "state" => ["string"], 
            "country" => ["string"],
        ]);
        
        

        $locale = LocaleModel::create($validatedData);

        return response()->json($locale, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(LocaleModel $localeModel)
    {
        $locale = LocaleModel::find($id);

        if(!$locale){
            return response()->json(["message" => 'Locale not found'], 404);
        }
        return response()->json($locale);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocaleModel $localeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LocaleModel $localeModel)
    {
        $locale = LocaleModel::find($id);

        if(!$locale){
            return response()->json(["message" => 'Locale not found'], 404);
        }

        $validatedData = $request->validate([
            "street" => ["string"],
            "district" => ["string"],
            "number" => ["string"], 
            "CEP" => ["string"],
            "city" => ["string"],
            "state" => ["string"], 
            "country" => ["string"],
        ]);

        $locale->update($validatedData);

        return response()->json($locale, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocaleModel $localeModel)
    {
        $locale = LocaleModel::find($id);

        if(!$locale){
            return response()->json(["message" => 'Locale not found'], 404);
        }

        $locale->delete();

        return response()->json(["message" => 'Locale deleted successfully'], 200);
    }
}
