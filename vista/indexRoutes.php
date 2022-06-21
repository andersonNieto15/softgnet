<?php require "layout/header.php" ?>
<div class="container-xl  table-responsive-xl">
	<table class="table table-primary table-striped table-bordered caption-top align-middle" border="2">
		<a class="btn btn-primary" href="index.php?mth=Routes&m=nuevo">NUEVA RUTA</a>
		<caption>RUTAS</caption>
		<thead class="align-middle">
			<tr>
				<th scope="col">DESCRIPCIÓN RUTA</th>
				<th scope="col">DRIVER</th>
				<th scope="col">VEHÍCULO</th>
				<th scope="col">ACTIVO</th>
				<th scope="col">OPCIONES</th>
			</tr>
		</thead>
		<tbody class="table-group-divider">
		    <?php 
		    foreach ($dato as $key => $value)
		        foreach ($value as $va ):
		            echo "<tr><td>".$va['description']."</td><td>".$va['first_name']." ".$va['last_name']."</td><td>".$va['descVehiculo']."</td>";

		            if ($va['active']=='1') {
		            	echo "<td>Si</td>";
		            }else{
		            	echo "<td>No</td>";
		            }

		        	echo "<td><div class='d-grid gap-2 d-md-flex justify-content-md-end'><a class='btn btn-info btn-sm' href='index.php?mth=Routes&m=editar&id=".$va['id_routes']."'>ACTUALIZAR</a> <a class='btn btn-danger btn-sm' href='index.php?mth=Routes&m=eliminar&id=".$va['id_routes']."'>ELIMINAR</a></div></td>";
		        	echo "</tr>";
		        endforeach;
		    ?>
		</tbody>
	</table>
</div>
<?php require "layout/footer.php" ?>