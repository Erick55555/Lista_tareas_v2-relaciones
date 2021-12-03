@extends("plantilla_inicio")

@section("articulo2")
    <div class="container bg-dark">
        <div class="row">
            <h3 class="text-light mt-5">Tareas actuales</h3>
        </div>
        <div class="row d-flex justify-content-center"> 
            <table class="table table-borderless text-light mt-3">
                <thead>
                    <tr>
                        <th>NOMBRE TAREAS</th>
                        <th>OPCION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tareas as $tarea)
                    <tr>
                        <td>{{$tarea->nombre}}</td>
                        <td>
                            <form action="{{route('ruta_tarea_eliminar',[$tarea->id])}}" method="post">
                                @csrf
                                @method('delete')
                            <input class="btn-danger" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection