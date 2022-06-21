<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-warning p-3 rounded ">
			<h1>ACTUALIZAR RUTA</h1>
			<hr>
			<form action="">
				<?php foreach ($dato as $value): ?>
					<?php  foreach ($value as $v ): ?>

					<label for="">ID RUTA</label> <br>
					<input type="text" class="form-control" disabled name="id_routes" value="<?php echo $v['id_routes'] ?>"><br>
					<label for="">DESCRIPCIÓN RUTA</label> <br>
					<input type="text" class="form-control" name="description" value="<?php echo $v['description'] ?>"><br>
					<label for="">DRIVER</label> <br>
					<input type="text" class="form-control" name="fk_driver_id" value="<?php echo $v['fk_driver_id'] ?>"><br>
					<label for="">VEHICULO</label> <br>
					<select class="form-select" id="fk_vehicle_id" name="fk_vehicle_id">
						<?php 
							foreach($listaVehiculos as $value1):
								foreach($value1 as $v1):
									if($v1['id_vehicles'] == $v['fk_vehicle_id']){
										echo "<option value='".$v1['id_vehicles']."' selected=true>".$v1['description']."</option>"; 
									}else{
										echo "<option value='".$v1['id_vehicles']."'>".$v1['description']."</option>"; 
									}
								endforeach;
							endforeach;
						?>
					</select><br>
					<label for="">ACTIVO</label> <br>
					<!-- <input type="text" name="active" value="<?php echo $v['active'] ?>"><br> -->
					<select class="form-select" id="active" name="active">
						<?php 
							if($v['active'] == 1){
								echo "<option value='1' selected>Si</option>";
								echo "<option value='2'>No</option>";
							}else{
								echo "<option value='1' >Si</option>";
								echo "<option value='2' selected>No</option>";
							}	
						?>
					</select><br>

					<input type="hidden" name="id" value="<?php echo $v['id_routes'] ?>">
					<input type="submit" class="btn btn-primary" name="btn" value="ACTUALIZAR">
					<?php endforeach ?>
				<?php endforeach ?>
				<input type="hidden" name="m" value="update">
				<input type="hidden" name="mth" value="Routes">
			</form>
			</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>