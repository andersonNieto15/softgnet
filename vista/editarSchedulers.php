<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-warning p-3 rounded ">
			<h1>ACTUALIZAR PROGRAMACIÓN</h1>
			<hr>
			<form action="">
				<?php foreach ($dato as $value): ?>
					<?php  foreach ($value as $v ): ?>

					<label for="">RUTA</label> <br>
				<select class="form-select" id="routeid" name="routeid">
						<?php 
							foreach($listadoRutas as $value1):
								foreach($value1 as $v1):
									if($v['id_routes']==$v1['id_routes']){
										echo "<option value='".$v1['id_routes']."' selected>".$v1['description']."</option>"; 
									}else{
										echo "<option value='".$v1['id_routes']."'>".$v1['description']."</option>"; 
									}
									
								endforeach;
							endforeach;
						?>
					</select><br>
				<label for="">SEMANA RUTA</label> <br>
				<input type="text" class="form-control" name="week" value="<?php echo $v['week_num'] ?>"><br>
				<label for="">SALIDA</label> <br>
				<!-- <input type="text" name="fk_vehicle_id"><br> -->
				<select id="from_city" class="form-select" name="from_city">
						<?php 
							foreach($listadoCiudades as $value1):
								foreach($value1 as $v1):
									if($v['from_city']==$v1['id_city']){
										echo "<option value='".$v1['id_city']."' selected>".$v1['city_name']."</option>"; 
									}else{
										echo "<option value='".$v1['id_city']."'>".$v1['city_name']."</option>"; 
									}		
								endforeach;
							endforeach;
						?>
					</select><br>

				<label for="">DESTINO</label><br>
				<select id="to_city" class="form-select" name="to_city">
						<?php 
							foreach($listadoCiudades as $value1):
								foreach($value1 as $v1):
									if($v['to_city']==$v1['id_city']){
										echo "<option value='".$v1['id_city']."' selected>".$v1['city_name']."</option>";
									}else{
										echo "<option value='".$v1['id_city']."'>".$v1['city_name']."</option>"; 
									}
									 
								endforeach;
							endforeach;
						?>
					</select><br>
				<label for="">ACTIVO</label><br>
				<select id="active" class="form-select" name="active">
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
					<input type="hidden" name="id" value="<?php echo $v['id_scheduler'] ?>">
					<input type="submit" name="btn" class="btn btn-primary" value="ACTUALIZAR">
					<?php endforeach ?>
				<?php endforeach ?>
				<input type="hidden" name="m" value="update">
				<input type="hidden" name="mth" value="Schedulers">

			</form>
			</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>