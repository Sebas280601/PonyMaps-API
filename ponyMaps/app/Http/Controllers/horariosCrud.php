<?php

namespace App\Http\Controllers;

use App\Models\areas;
use App\Models\horarios;
use App\Models\materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class horariosCrud extends Controller
{
    function index()
    {
        $us = horarios::all();
        $materia=materias::all();
        return view('horarios.horarioVista',compact('us','materia'));
    }

    function insertar()
    {
        $area=areas::all(); 
        $materia=materias::all();
        return view('horarios\vistaInserta',compact('materia','area'));
    }

    function insertarU(Request $request)
    {
        $horario = new horarios();
        $horario->inicio = $request->post('inicio');
        $horario->fin = $request->post('fin');
        $horario->edificio = $request->post('edificio');
        $horario->salon = $request->post('salon');
        $horario->dia = $request->post('dia');
        $horario->materia = $request->post('materia');
        $horario->save();

        return redirect()->route('horariosVista')->with("success","horario insertado");
    }

    function actualiza($id)
    {
        $us = horarios::find($id);
        return view('horarios\vistaActualiza',compact('us'));
    }

    function actualizaU($id, Request $request)
    {
        $horario = horarios::find($id);
        $horario->edificio = $request->post('edificio');
        $horario->salon = $request->post('salon');
        $horario->dia = $request->post('dia');
        $horario->inicio = $request->post('inicio');
        $horario->fin = $request->post('fin');
        $horario->save();

        return redirect()->route('horariosVista')->with("success","horario actualizado");
    }

    public function elimina($id)
    {
        $horario=horarios::find($id);
        $horario->delete();
        
        return redirect()->route('horariosVista')->with("success","horario eliminado");
    }

    public function eliminaT()
    {
        DB::table('horarios')->delete();
        
        return redirect()->route('horariosVista')->with("success","Todos los horarios han sido eliminados eliminado");
    }
}
