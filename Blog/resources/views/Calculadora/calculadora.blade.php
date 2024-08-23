
<form action="{{ route('calculate.function') }}" id="formCalculadora" method="POST" style='margin-top:30px;'>
	@csrf
	<input type="number" name="num1" id="num1" required>
	<select id="operacion" id="opciones" name="opciones">
		<option value="+" selected>+</option>
		<option value="-">-</option>
		<option value="x">*</option>
		<option value="/">/</option>
	</select>
	<input type="number" name="num2" id="num2" required>
	
	<input type="submit" value="Calcular">

</form>

@if(isset($resultado))
    <h2>Resultado: {{ $resultado }}</h2>
@endif