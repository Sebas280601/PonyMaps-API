<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\areas;
use App\Models\edificios;
use App\Models\horarios;
use App\Models\materias;
use Illuminate\Http\Request;

class horarioApiController extends Controller
{
    public function show()
    { 

    }

    public function index()
    { 
   
    $edificios=edificios::all();

    if($edificios){
    return response()->json([
        'edificios' => $edificios,
        
    ]);
   }else{
    return response()->json([
        'msg'=>'No hay edificios'
   ], 200);
   }
    }

    public function horariosCompletos ()
    { 
   
    $horarios=horarios::all();
    if($horarios){
        return response()->json([
            'Horarios' => $horarios,
            
        ]);
       }else{
        return response()->json([
            'msg'=>'No hay horarios'
       ], 200);
       }
    

}



    public function salon ($id)
    { 
   
    $salones=areas::where('id_edificio',$id)->get();

    if($salones){
    return response()->json([
        'salones' => $salones,
        
    ]);
   }else{
    return response()->json([
        'msg'=>'No hay salones'
   ], 200);
   }
    }


    public function horario ($id)
    { 
   
    $horarios=horarios::where('id_area',$id)->get();

    if($horarios){

       

     $lunes=horarios::where('id_area',$id)->where('dia','lunes')->get(); 
     foreach($lunes as $l){
        $m=materias::where('id',$l->id_materia)->first();
        $l->materia=$m->nombre;
        
        }
     $martes=horarios::where('id_area',$id)->where('dia','martes')->get(); 
     foreach($martes as $l){
        $m=materias::where('id',$l->id_materia)->first();
        $l->materia=$m->nombre;
        
        }
     $miercoles=horarios::where('id_area',$id)->where('dia','miercoles')->get(); 
     foreach($miercoles as $l){
        $m=materias::where('id',$l->id_materia)->first();
        $l->materia=$m->nombre;
        
        }
     $jueves=horarios::where('id_area',$id)->where('dia','jueves')->get(); 
     foreach($jueves as $l){
        $m=materias::where('id',$l->id_materia)->first();
        $l->materia=$m->nombre;
        
        }
     $viernes=horarios::where('id_area',$id)->where('dia','viernes')->get(); 
     foreach($viernes as $l){
        $m=materias::where('id',$l->id_materia)->first();
        $l->materia=$m->nombre;
        
        }
     $sabado=horarios::where('id_area',$id)->where('dia','sabado')->get(); 
     foreach($sabado as $l){
        $m=materias::where('id',$l->id_materia)->first();
        $l->materia=$m->nombre;
        
        } 
    return response()->json([
        
        'lunes' => $lunes,
        'martes' => $martes,
        'miercoles' => $miercoles,
        'jueves' => $jueves,
        'viernes' => $viernes,
        'sabado' => $sabado,
        
    ]);
   }else{
    return response()->json([
        'msg'=>'No hay horarios en esta area'
   ], 200);
   }
    }
    public function materia ($id)
    { 
   
    $materia=materias::find($id)->nombre;

    if($materia){
    return response()->json([
        'materia' => $materia,
        
    ]);
   }else{
    return response()->json([
        'msg'=>'No existe la materia'
   ], 200);
   }
    }

}
