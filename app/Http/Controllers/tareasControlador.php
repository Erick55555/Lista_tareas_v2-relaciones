<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use Illuminate\Http\Request;

class tareasControlador extends Controller
{
    function mostrar(){
        $tareas = tarea::all();
        return view("articulo2")->with("tareas",$tareas);
    }

    function mostrar_formulario(){
        return view("extends");
    }

    function mostrar_formulario_buscar(){
        return view("buscar");
    }

    function buscar(Request $pet2){
        $tareas_encontradas=tarea::where("tareas.nombre","like","%".$pet2->get("buscador")."%")->get();
        return view('articulo3')->with("tareas",$tareas_encontradas);
        
    }

    function anadir(Request $pet){
        $tarea= new tarea;
        $tarea->nombre = $pet->get("nombre_tarea");
        if($pet->get('nombre_tarea')==""){
            return view('anadir_fallido');
        }else{
            $tarea->save();
            return redirect("/");
        }
    }

    function eliminar($id){
        $tarea= new tarea;
        $tarea = tarea::find($id);
        $tarea->delete();
        return redirect("/");
    }
}
