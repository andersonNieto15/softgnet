<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  	<div class="row">
		    <div class="col"></div>
		    <div class="col text-bg-info p-3 rounded ">
				<h1>NUEVA POGRAMACIÓN</h1>
				<hr>
				<form action="">
					<label for="">RUTA</label> <br>
					<select class="form-select" id="routeid" name="routeid">
						<?php 
							foreach($listadoRutas as $value2):
								foreach($value2 as $v2):
									echo "<option value='".$v2['id_routes']."'>".$v2['description']."</option>"; 
								endforeach;
							endforeach;
						?>
					</select>
					<br>
					<label for="">SEMANA RUTA</label> <br>
					<input type="text" class="form-control" name="week"><br>
					<label for="">SALIDA</label> <br>
					<select class="form-select" id="from_city" name="from_city">
						<?php 
							foreach($listadoCiudades as $value1):
								foreach($value1 as $v1):
									echo "<option value='".$v1['id_city']."'>".$v1['city_name']."</option>"; 
								endforeach;
							endforeach;
						?>
					</select>
					<br>
					<label for="">DESTINO</label><br>
					<select class="form-select" id="to_city" name="to_city">
						<?php 
							foreach($listadoCiudades as $value1):
								foreach($value1 as $v1):
									echo "<option value='".$v1['id_city']."'>".$v1['city_name']."</option>"; 
								endforeach;
							endforeach;
						?>
					</select>
					<br>
					<label for="">ACTIVO</label><br>
					<select class="form-select" id="active" name="active">
						<option value='1'>Si</option>
						<option value='2'>No</option>
					</select>
					<br>
					<input  class="btn btn-primary" type="submit" name="btn">
					<input type="hidden" name="m" value="guardar">
					<input type="hidden" name="mth" value="Schedulers">
				</form>
			</div>
	    	<div class="col"></div>
	  	</div>
	</div>
</div>
<?php require "layout/footer.php" ?>
