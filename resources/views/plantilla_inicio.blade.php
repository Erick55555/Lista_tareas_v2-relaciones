<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Plantilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div>
            <nav class="navbar navbar bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="#">Lista tareas</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item text-light">
                                <a href="{{route('ruta_tarea')}}">Lista tareas</a>
                            </li>
                            <li class="nav-item text-light">
                                <a href="{{route('ruta_tarea_anadir')}}">Anadir tarea</a>
                            </li>
                            <li class="nav-item text-light">
                                <a href="{{route('ruta_tarea_buscar')}}">Buscar tarea</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                @yield("Articulo1")
            </div>
            <div>
                @yield("articulo2")
            </div>
            <div>
                @yield("articulo3")
            </div>
        </div>
    </div>
</body>
</html>