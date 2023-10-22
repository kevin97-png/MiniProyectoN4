<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencia = new Asistencia();
        return $asistencia->all();
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
        $asistencia = new Asistencia();
        $asistencia->fecha = $request->fecha;
        $asistencia->estado = $request->estado;
        $asistencia->save();
        return "Alumno registrado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Asistencia::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $id)
    {
        $request->validate([
            'fecha' => 'required',
            'estado' => 'required',
        ]);
        return "Registrado correctamente de la lista";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return "Eliminado de la lista correctamente";
    }
}
