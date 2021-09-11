<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Foto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = Foto::create($request->all());

        return response()->json($foto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $foto = Foto::findOrFail($id);
            return response()->json(['data' => $foto], 200);
        } catch(\Exception $e) {
            return response()->json(['message' => 'foto not found'], 404);
        }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $foto = Foto::findOrFail($id);
            $foto->update($request->all());
            return response()->json(['message' => 'data successfully updated', 'data' => $foto], 200);
        } catch (\Exception $e) {
            return response()->json($foto, 400);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {
        try {
            $foto->delete();
            return response()->json(['message' => 'delete successfully'], 200);
        } catch (\Exception $e){
            return response()->json(['message' => 'delete failed or data not found'], 400);
        }
    }
}
