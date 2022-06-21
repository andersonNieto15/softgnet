<?php require "layout/header.php" ?>
<div class="container-xl  table-responsive-xl">
	<table class="table table-primary table-striped table-bordered caption-top align-middle" border="2">
		<a class="btn btn-primary" href="index.php?mth=Vehicles&m=nuevo">NUEVO VEHICULO</a>
		<caption>VECHÍCULOS</caption>
		<thead class="align-middle">
			<tr>
				<th scope="col">DESCRIPCIÓN VEHÍCULO</th>
				<th scope="col">AÑO</th>
				<th scope="col">MARCA</th>
				<th scope="col">CAPACIDAD</th>
				<th scope="col">OPCIONES</th>
			</tr>
		</thead>
		<tbody class="table-group-divider">
		    <?php 
		    foreach ($dato as $key => $value)
		        foreach ($value as $va ):
		            echo "<tr><td>".$va['description']."</td><td>".$va['year']."</td><td>".$va['make']."</td><td>".$va['capacity']."</td>";
		        	echo "<td><div class='d-grid gap-2 d-md-flex justify-content-md-end'><a class='btn btn-info btn-sm' href='index.php?mth=Vehicles&m=editar&id=".$va['id_vehicles']."'>ACTUALIZAR</a> <a class='btn btn-danger btn-sm' href='index.php?mth=Vehicles&m=eliminar&id=".$va['id_vehicles']."'>ELIMINAR</a></div></td>";
		        	echo "</tr>";
		        endforeach;
		    ?>
		</tbody>
	</table>
</div>
<?php require "layout/footer.php" ?>