<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return response()->json([
            'message' => 'Listado de todos los alumnos',
            'data' => $alumnos,
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
        $alumno = Alumno::create($request->all());
        return response()->json([
            'message' => 'El alumno ha sido creado correctamente',
            'data' => $alumno,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        $empresa = Empresa::findOrFail($alumno->empresa_id);
        return response()->json([
            'message' => 'Alumno mostrado correctamente',
            'data' => $alumno,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return response()->json([
            'message' => 'El alumno ha sido actualizado correctamente',
            'data' => $alumno,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return response()->json([
            'message' => 'El alumno ha sido eliminado correctamente',
            'data' => $alumno,
        ], Response::HTTP_OK);
    }
}
