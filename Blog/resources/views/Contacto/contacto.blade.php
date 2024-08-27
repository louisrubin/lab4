<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body style="padding: 50px;">
    @if ( ! isset($nombre) )
        <form action="{{ route('contacto.verInfo') }}" method="post">
            @csrf
            <div style="padding-bottom: 15px;">
                <label for="">Nombre</label>
                <input type="text" name="name" required>
            </div>
            <div style="padding-bottom: 15px;">
                <label for="">Teléfono</label>
                <input type="number" name="telefono" required>
            </div>
            <div style="padding-bottom: 15px;">
                <label for="">Dirección</label>
                <input type="text" name="address" required>
            </div>
            <input type="submit" value="Enviar">
        </form>
    @else
        <div>
            <h3>
                <span style="text-decoration-line: underline;">Nombre:</span> 
                {{ $nombre }}
            </h3>
        </div>
        <div>
            <h3>
                <span style="text-decoration-line: underline;">Teléfono:</span> 
                {{ $telefono }}
            </h3>
        </div>
        <div>
            <h3>
                <span style="text-decoration-line: underline;">Dirección:</span> 
                {{ $address }}
            </h3>
        </div>

        <button>
                <a href="{{ route('contacto.view') }}" style="padding: 5px 10px; text-decoration: none;">Volver</a>
        </button>
    @endif

</body>
</html>