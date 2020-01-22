<?php

session_start();  //Tiene que estar en la primera línea

if ($_POST) { // Si tenemos datos de formulario...
	if (isset ($_POST['cproducto'])){
		$producto = $_POST['cproducto'];
	}

	if (isset ($_POST['cunidades'])){
		$unidades = $_POST['cunidades'];
	}

	$cesta=$_SESSION['cesta'];  // Creamos el array  // La primera vez, se guardará vacía

	if (!isset ($cesta)){ // Si no existe la cesta
		$cesta[$producto]=$unidades;	// Grabo el primer producto en la ceta
	}else { // si la cesta ya existía
		$encontrado=0;
		foreach ($cesta as $codigo=>$cantidad){ // Para cada código metido en la cesta...
			if ($codigo == $producto) {// Si el código coincide con el introducido por el usuario (no es la primera vez q lo compra)
				$cesta[$codigo] += $unidades;
				$encontrado=1;
			}
		}
		if (!$encontrado)
			$cesta[$producto]=$unidades;
	}
	$_SESSION["cesta"]=$cesta;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<form action="probando2.php" method="post">
	<label for="producto">Producto</label>
	<select name="cproducto">
		<option value="481">Zapato</option>
		<option value="550">Gorro</option>
		<option value="011">Paraguas</option>
	</select>

	<label for="unidad">Unidades</label><input type="text" name="cunidades" /><br />

	<input type="submit" value="Añadir a cesta" />
	<a href="vaciar_cesta.php">Vaciar cesta</a>
</form>

<?php

if (isset ($cesta)){
//  LISTAR EL CONTENIDO DE $cesta

	echo "Productos en la cesta:<br />";
	foreach ($cesta as $codproducto=>$ncantidad){
		echo "Producto: $codproducto  -> N. Unidades: $ncantidad <br />";
	}
}
?>
</body>
</html>
