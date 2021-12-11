@extends("plantilla_inicio")

@section("Articulo1")
    <div class="container bg-dark">
        <div class="row">
            <h1 class="text-light mt-5">Nueva tarea</h1>
        </div>
        <div class="row">
            <form action="{{route('ruta_tarea_anadir')}}" method="post">
                @csrf
                <h5 class="text-light">Nombre tarea:</h5>
                <input class="forn-control" type="text" name="nombre_tarea" id="nombre_tarea">
                <h5 class="text-light">Usuario asignables:</h5>
                <select name="usuario">
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
                <p></p>
                <a href="{{ route('ruta_usuario_mostrar')}}">Crear un usuario</a><br><br>
                <input class="btn btn-warning" type="submit" value="Anadir">
            </form>
        </div>
    </div>
@endsection
