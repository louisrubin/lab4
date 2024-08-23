
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
    <button>
        <a href="{{ route('promedio.view') }}" style="padding: 5px 10px; text-decoration: none;">Volver</a>
    </button>
@endif

