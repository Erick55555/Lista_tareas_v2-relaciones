@extends("plantilla_inicio")

@section("Articulo1")
    <div class="container bg-dark">
        <div class="row">
            <h1 class="text-light mt-5">Nuevo usuario</h1>
        </div>
        <div class="row">
            <form action="{{route('ruta_usuario_anadir')}}" method="post">
                @csrf
                <h5 class="text-light">Usuario nombre:</h5>
                <input class="forn-control" type="text" name="nombre_usuario" id="nombre_usuario">
                <h5 class="text-light">Usuario apellido:</h5>
                <input class="forn-control" type="text" name="apellido_usuario" id="apellido_usuario">
                <input class="btn btn-warning" type="submit" value="Anadir">
            </form>
        </div>
    </div>
@endsection
