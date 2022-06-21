<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-info p-3 rounded ">
			<h1>NUEVO VEHICULO</h1>
			<hr>
			<form action="">
				<label for="">DESCRIPCIÓN VEHICULO</label> <br>
				<input type="text" class="form-control" name="description"><br>
				<label for="">AÑO</label> <br>
				<input type="text" class="form-control" name="year"><br>
				<label for="">MARCA</label> <br>
				<input type="text" class="form-control" name="make"><br>
				<label for="">CAPACIDAD</label><br>
				<input type="text" class="form-control" name="capacity"><br>

				<input type="submit" class="btn btn-primary" name="btn">
				<input type="hidden" name="m" value="guardar">
				<input type="hidden" name="mth" value="Vehicles">
			</form>
		</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>
