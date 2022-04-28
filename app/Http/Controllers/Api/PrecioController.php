<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Precio;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $precios = Precio::all();
        return response()->json([
            'message' => 'Listado de todos los precios',
            'data' => $precios,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $precio = Precio::create($request->all());
        return response()->json([
            'message' => 'El precio ha sido creado correctamente',
            'data' => $precio,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function show(Precio $precio)
    {
        return response()->json([
            'message' => 'Precio mostrado correctamente',
            'data' => $precio,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Precio $precio)
    {
        $precio->update($request->all());
        return response()->json([
            'message' => 'El precio ha sido actualizado correctamente',
            'data' => $precio,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Precio $precio)
    {
        $precio->delete();
        return response()->json([
            'message' => 'El precio ha sido eliminado correctamente',
            'data' => $precio,
        ], Response::HTTP_OK);
    }
}
