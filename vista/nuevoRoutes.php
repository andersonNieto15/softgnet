<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-info p-3 rounded ">
			<h1>NUEVA RUTA</h1>
			<hr>
			<form action="">
				<label for="">DESCRIPCIÓN RUTA</label> <br>
				<input type="text" class="form-control" name="description"><br>
				<label for="">DRIVER</label> <br>
				<input type="text" class="form-control" name="fk_driver_id"><br>
				<label for="">ID VEHICULO</label> <br>
				<select class="form-select" id="fk_vehicle_id" name="fk_vehicle_id">
					<?php 
						foreach($listadoVehiculos as $value2):
							foreach($value2 as $v2):

								echo "<option value='".$v2['id_vehicles']."'>".$v2['description']."</option>"; 
							endforeach;
						endforeach;
					?>
				</select>
				<br>
				<label for="">ACTIVO</label><br>
				<!-- <input type="text" class="form-control" name="active"><br> -->
				<select class="form-select" id="active" name="active">
						<option value='1'>Si</option>
						<option value='2'>No</option>
					</select>
					<br>

				<input type="submit" class="btn btn-primary" name="btn">
				<input type="hidden" name="m" value="guardar">
				<input type="hidden" name="mth" value="Routes">
			</form>
		</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>
