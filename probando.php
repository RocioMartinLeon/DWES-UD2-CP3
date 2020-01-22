<?php

session_start();

if ($_POST) {
	if (isset ($_POST['producto1'])){
		$producto = $_POST['producto1'];
	}
	if (isset ($_POST['producto2'])){
		$producto = $_POST['producto2'];
	}
	if (isset ($_POST['producto3'])){
		$producto = $_POST['producto3'];
	}
	if (isset ($_POST['producto4'])){
		$producto = $_POST['producto4'];
	}



	$cesta=$_SESSION['cesta'];

	if (!isset ($cesta)){
		$cesta[$producto]=$unidades;
	}else {
		$encontrado=0;
		foreach ($cesta as $codigo=>$cantidad){
			if ($codigo == $producto) {
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
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Carrito la compra</title>
</head>
<body>
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
