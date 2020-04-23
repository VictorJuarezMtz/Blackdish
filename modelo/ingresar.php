<html>
<head>
	<title> Ingresar Libro</title>
</head>
<header>
Ingresa los datos del Libro
</header>
<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='text' name='edicion' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	
</form>

</html>