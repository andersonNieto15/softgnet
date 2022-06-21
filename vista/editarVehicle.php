<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-warning p-3 rounded ">
			<h1>ACTUALIZAR VEHICULO</h1>
			<hr>
			<form action="">
				<?php foreach ($dato as $value): ?>
					<?php  foreach ($value as $v ): ?>

					<label for="">ID VEHICULO</label> <br>
					<input type="text" disabled class="form-control" name="id_vehicles" value="<?php echo $v['id_vehicles'] ?>"><br>
					<label for="">DESCRIPCIÓN VEHICULO</label> <br>
					<input type="text" class="form-control" name="description" value="<?php echo $v['description'] ?>"><br>
					<label for="">AÑO</label> <br>
					<input type="text" class="form-control" name="year" value="<?php echo $v['year'] ?>"><br>
					<label for="">MARCA</label> <br>
					<input type="text" class="form-control" name="make" value="<?php echo $v['make'] ?>"><br>
					<label for="">CAPACIDAD</label> <br>
					<input type="text" class="form-control" name="capacity" value="<?php echo $v['capacity'] ?>"><br>
					<label for="">ACTIVO</label> <br>
					<select class="form-select" id="active" name="active">
					<?php
						if($v['active']==1){
							echo "<option value='1' selected>Si</option>";
							echo "<option value='2'>No</option>";
						}else{
							echo "<option value='1' >Si</option>";
							echo "<option value='2' selected>No</option>";
						}
					?>
					</select><br>
					<input type="hidden" name="id" value="<?php echo $v['id_vehicles'] ?>">
					<input type="submit" class="btn btn-primary" name="btn" value="ACTUALIZAR">
					<?php endforeach ?>
				<?php endforeach ?>
				<input type="hidden" name="m" value="update">
				<input type="hidden" name="mth" value="Vehicles">

			</form>
			</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>