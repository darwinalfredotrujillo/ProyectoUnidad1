<?php 
	
	$cantidad = $_POST['cantidad'];
	$total = $cantidad*7000
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="assets/css/estilos.css">
<head>
	<?php include 'navbar2.php'; ?>
	<title>CANTIDAD</title>

	<section id="slider2">
		<figure>
			<center><img src="imagenes/productos/Refri.jpg"></center>
				<div class="form-group">
</head>
<body>
<center>
	<h1>TOTAL A PAGAR</h1>
	<h2>total: $<?php echo $total;?> mxn</h2>
	<h2>cantidad: <?php echo $cantidad;?></h2>
	

	<a href="Refrigerador.php"><button type="submit" class="btn btn-danger">Regresar</button></a>
	<a href="Pagar.php"><button type="submit" class="btn btn-success">Pagar</button></a>

</center>
</body>
</html>

