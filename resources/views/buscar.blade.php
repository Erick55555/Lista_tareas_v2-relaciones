@extends("plantilla_inicio")

@section("articulo3")
    <div class="container bg-dark">
        <div class="row">
            <h3 class="text-light mt-5">Buscar tareas</h3>
        </div>
        <form action="{{route('ruta_tarea_encontrado')}}" method="post">
            @csrf
            <div class="row d-flex justify-content-center"> 
                <input class="forn-control" type="text" name="buscador" id="buscador">
                <input class="forn-control" type="submit" value="Buscar">
            </div>
        </form>
    </div>
@endsection