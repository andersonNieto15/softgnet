<?php require "layout/header.php" ?>
<div class="container-xl  table-responsive-xl">
	<table class="table table-primary table-striped table-bordered caption-top align-middle" border="2">
		<a class="btn btn-primary" href="index.php?mth=Drivers&m=nuevo">NUEVO DRIVER</a>
		<caption>DRIVERS</caption>
		<thead class="align-middle">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">NOMBRE</th>
				<th scope="col">APELLIDO</th>
				<th scope="col">DIRECCIÓN</th>
				<th scope="col">CIUDAD</th>
				<th scope="col">EMAIL</th>
				<th scope="col">TELÉFONO</th>
				<th scope="col">OPCIONES</th>
			</tr>
		</thead>
		<tbody class="table-group-divider">
		    <?php 
		    foreach ($dato as $key => $value)
		        foreach ($value as $va ):
		            echo "<tr><td>".$va['number_id']."</td><td>".$va['first_name']."</td><td>".$va['last_name']."</td><td>".$va['address']."</td><td>".$va['city_name']."</td><td>".$va['email']."</td><td>".$va['phone']."</td>";
		        	echo "<td><div class='d-grid gap-2 d-md-flex justify-content-md-end'><a class='btn btn-info btn-sm' href='index.php?mth=Drivers&m=editar&id=".$va['id_user']."'>ACTUALIZAR</a> <a class='btn btn-danger btn-sm' href='index.php?mth=Drivers&m=eliminar&id=".$va['id_user']."'>ELIMINAR</a></div></td>";
		        	echo "</tr>";
		        endforeach;
		    ?>
		</tbody>
	</table>
</div>
<?php require "layout/footer.php" ?>