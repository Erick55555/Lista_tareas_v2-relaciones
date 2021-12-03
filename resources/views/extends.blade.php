@extends("plantilla_inicio")

@section("Articulo1")
    <div class="container bg-dark">
        <div class="row">
            <h3 class="text-light mt-5">Nueva tarea</h3>
        </div>
        <div class="row">
            <form action="{{route('ruta_tarea_anadir')}}" method="post">
                @csrf
                <input class="forn-control" type="text" name="nombre_tarea" id="nombre_tarea">
                <input class="btn btn-warning" type="submit" value="Anadir">
            </form>
        </div>
    </div>
@endsection
