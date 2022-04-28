<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return response()->json([
            'message' => 'Listado de todas las empresas',
            'data' => $empresas,
        ], Response::HTTP_OK);
    }

    private function cargarArchivo($file)
    {
        $nombreArchivo = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('fotografias'), $nombreArchivo);
        return $nombreArchivo;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $directorio = $request->all();
        if ($request->has('photo')) {
            $directorio['photo'] = $this->cargarArchivo($request->photo);
        } */
        $empresa = Empresa::create($request->all());
        return response()->json([
            'message' => 'La empresa ha sido creado correctamente',
            'data' => $empresa,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return response()->json([
            'message' => 'Empresa mostrado correctamente',
            'data' => $empresa,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        /* $input = $request->all();
        if ($request->has('photo')) {
            $input['photo'] = $this->cargarArchivo($request->photo);
        } */
        $empresa->update($request->all());
        return response()->json([
            'message' => 'La empresa ha sido actualizado correctamente',
            'data' => $empresa,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json([
            'message' => 'La empresa ha sido eliminado correctamente',
            'data' => $empresa,
        ], Response::HTTP_OK);
    }
}
