<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<table class="table table-primary table-striped table-bordered caption-top align-middle" border="2">
		<a class="btn btn-primary" href="index.php?mth=Schedulers&m=nuevo">NUEVA PROGRAMACIÓN</a>
		<caption>PROGRAMACIONES</caption>
		<thead class="align-middle">
			<tr>
				<th scope="col">DESCRIPCIÓN RUTA</th>
				<th scope="col">DRIVER</th>
				<th scope="col">DESCRIPCIÓN VEHICULO</th>
				<th scope="col">MARCA VEHICULO</th>
				<th scope="col">CAPACIDAD</th>
				<th scope="col">SEMANA ASIGNADA</th>
				<th scope="col">CIUDAD SALIDA</th>
				<th scope="col">CIUDAD DESTINO</th>
				<th scope="col">CREADOR</th>
				<th scope="col">FECHA ASIGNACIÓN</th>
				<th scope="col">OPCIONES</th>
			</tr>
		</thead>
		<tbody class="table-group-divider">
		    <?php 
		    foreach ($dato as $key => $value)
		        foreach ($value as $va ):
		            echo "<tr><td>".$va['Descrip_ruta']."</td><td>".$va['Driver']."</td><td>".$va['Descrip_vehiculo']."</td><td>".$va['Marca_vehiculo']."</td><td>".$va['Capacidad']."</td><td>".$va['Semana_asignada']."</td><td>".$va['Ciudad_salida']."</td><td>".$va['Ciudad_destino']."</td><td>".$va['Creador']."</td><td>".$va['Fecha_asignacion']."</td>";
		        	echo "<td>
		        	<div class='d-grid gap-2 d-md-flex justify-content-md-end'>
		        	<a class='btn btn-info btn-sm' href='index.php?mth=Schedulers&m=editar&id=".$va['id_scheduler']."'>ACTUALIZAR</a>	 <a class='btn btn-danger btn-sm' href='index.php?mth=Schedulers&m=eliminar&id=".$va['id_scheduler']."'>ELIMINAR</a>
		        	</div>
		        	</td>";
		        	echo "</tr>";
		        endforeach;
		    ?>
		</tbody>
	</table>
</div>
<?php require "layout/footer.php" ?>