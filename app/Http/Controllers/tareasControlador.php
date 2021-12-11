<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use App\Models\usuario;
use Illuminate\Http\Request;

class tareasControlador extends Controller
{
    function mostrar(){
        $tareas = tarea::all();
        return view("articulo2")->with("tareas",$tareas);
    }

    function mostrar_formulario(){
        $usuarios = usuario::all();
        return view("extends")->with("usuarios",$usuarios);
    }

    function mostrar_formulario_usuario(){
        return view("anadir_usuario");
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
        $tarea->usuario_id = $pet->get("usuario");
        if($pet->get('nombre_tarea')==""){
            return view('anadir_fallido');
        }else{
            $tarea->save();
            return redirect("/");
        }
    }

    function anadir_usuario(Request $pet){
        $usuario= new usuario;
        $usuario->nombre = $pet->get("nombre_usuario");
        $usuario->apellido = $pet->get("apellido_usuario");
        $usuario->save();
        return redirect("/tarea");
        
    }

    function eliminar($id){
        $tarea= new tarea;
        $tarea = tarea::find($id);
        $tarea->delete();
        return redirect("/");
    }
}
