<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        @if( ! isset($cantMaterias ))
            <form action="{{ route('promedio.function') }}" method="POST" style='margin-top:30px;'>
                @csrf
                <label>Cantidad de materias:</label>
                <input type="number" name="cantMateriasInput" required style="text-align: right; width: 60px;">
                <input type="submit" value="Enviar">
            </form>
            
        @endif

        @if( isset($cantMaterias ) &&  ! isset($promedio) )

            <form action="{{ route('promedio.calculando') }}" method="POST" style='margin-top:30px;'>
                @csrf

                @for ($i = 0; $i < $cantMaterias; $i++)
                    <div>
                        <label>Materia {{ $i + 1 }}</label>
                        <br/>
                        <input type="number" name="nota{{ $i + 1 }}" required>
                    </div>
                @endfor

                <input type="hidden" name="cantMaterias" value="{{ $cantMaterias }}">
                <br/>
                <input type="submit" value="Enviar">

            </form>

            <button>
                <a href="{{ route('promedio.view') }}" style="padding: 5px 10px; text-decoration: none;">Volver</a>
            </button>
        @endif


        @if( isset($promedio ))    
            <h2>Promedio: {{ $promedio }}</h2>
            <button>
                <a href="{{ route('promedio.view') }}" style="padding: 5px 10px; text-decoration: none;">Volver</a>
            </button>
        @endif
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
