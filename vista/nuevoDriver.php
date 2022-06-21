<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-info p-3 rounded ">
			<h1>NUEVO DRIVER</h1>
			<hr>
			<form action="">
				<label for="">TIPO ID</label> <br>
				<select class="form-select" id="tp_id" name="tp_id">
					<?php 
						foreach($tipos_id as $value2):
							foreach($value2 as $v2):
								echo "<option value='".$v2['id_tp_id']."'>".$v2['tp_name']."</option>"; 
							endforeach;
						endforeach;
					?>
				</select>
				<br>
				<label for=""># ID</label> <br>
				<input type="text" class="form-control" name="number_id"><br>
				<label for="">NOMBRE</label> <br>
				<input type="text" class="form-control" name="nombre"><br>
				<label for="">APELLIDO</label><br>
				<input type="text" class="form-control" name="apellido"><br>
				<label for="">DIRECCIÓN</label><br>
				<input type="text" class="form-control" name="direccion"><br>
				<label for="">CIUDAD</label><br>
				<select class="form-select" id="ciudad" name="ciudad">
					<?php 
						foreach($listadoCiudades as $value2):
							foreach($value2 as $v2):
								echo "<option value='".$v2['id_city']."'>".$v2['city_name']."</option>"; 
							endforeach;
						endforeach;
					?>
				</select>
				<br>
				<label for="">EMAIL</label><br>
				<input type="text" class="form-control" name="email"><br>
				<label for="">TELEFONO</label><br>
				<input type="text" class="form-control" name="telefono"><br>
				<input type="submit" class="btn btn-primary" name="btn">
				<input type="hidden" name="m" value="guardar">
				<input type="hidden" name="mth" value="Drivers">

			</form>
		</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>
