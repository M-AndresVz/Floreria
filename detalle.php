<head>
	<style>
		li {
		    display: inline;
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		}
		h11 {
			text-align: center;
			background-color: pink;
			color: white;
			width: 80%;
			display: inline-block;
			vertical-align: top;
		}
	</style>
	<meta charset="utf-8"/>
	<title>Descripcion Flores</title>
</head>

<body>
	<header>
		<ul>
			<li><h11><font size = "20">Detalles</font></h11>
				<a href="./carritodecompras.php" size = "20" title="ver carrito de compras">
					<img src="./imagenes/carrito.png">
				</a>
			</li>
		</ul>		
	</header>

	<section>
		
	<?php
		$server="localhost";
		$username="root";
		$password="";
		$db='floreria';
		$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
		$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
		$re=mysql_query("select * from productos where id=".$_GET['id'])or die(mysql_error());
		while ($query=mysql_fetch_array($re)) {
		?>
			<center>
				<img src="./productos/<?php echo $query['imagen'];?>"><br>
				<span><?php echo $query['nombre'];?></span><br><br>
				<span><?php echo $query['descripcion'];?></span><br><br>
				<span>Precio: <?php echo $query['precio'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $query['id'];?>">Añadir al carrito de compras</a>
			</center>
	<?php
		}
	?>
	</section>
</body>