<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-warning p-3 rounded ">
			<h1>EDITAR DRIVER</h1>
			<hr>
			<form action="">
				<?php foreach ($dato as $value): ?>
					<?php  foreach ($value as $v ): ?>
					<label for="">TIPO ID</label> <br>
					<select class="form-select" id="tp_id" name="tp_id">
						<?php 
							foreach($tipos_id as $value2):
								foreach($value2 as $v2):
									if ($v['fk_tp_id']==$v2['id_tp_id']) {
										echo "<option value='".$v2['id_tp_id']."' selected>".$v2['tp_name']."</option>";
									}else{
										echo "<option value='".$v2['id_tp_id']."'>".$v2['tp_name']."</option>";
									} 
								endforeach;
							endforeach;
						?>
					</select>
					<br>
					<label for=""># ID</label> <br>
					<input type="text" class="form-control" name="number_id" value="<?php echo $v['number_id'] ?>"><br>
					<label for="">NOMBRE</label> <br>
					<input type="text" class="form-control" name="nombre" value="<?php echo $v['first_name'] ?>"><br>
					<label for="">APELLIDO</label> <br>
					<input type="text" class="form-control" name="apellido" value="<?php echo $v['last_name'] ?>"><br>
					<label for="">DIRECCIÓN</label> <br>
					<input type="text" class="form-control" name="direccion" value="<?php echo $v['address'] ?>"><br>
					<label for="">CIUDAD</label> <br>
					<!-- <input type="text" name="ciudad" value="<?php echo $v['city_name'] ?>"><br> -->
					<select class="form-select" id="ciudad" name="ciudad">
						<?php 
							foreach($listadoCiudades as $value2):
								foreach($value2 as $v2):
									if ($v['city_name']==$v2['id_city']) {
										echo "<option value='".$v2['id_city']."' selected>".$v2['city_name']."</option>";
									}else{
										echo "<option value='".$v2['id_city']."'>".$v2['city_name']."</option>";
									} 
								endforeach;
							endforeach;
						?>
					</select>
					<br>
					<label for="">EMAIL</label> <br>
					<input type="text" class="form-control" name="email" value="<?php echo $v['email'] ?>"><br>
					<label for="">TELEFONO</label> <br>
					<input type="text" class="form-control" name="telefono" value="<?php echo $v['phone'] ?>"><br>

					<input type="hidden" name="id" value="<?php echo $v['id_user'] ?>">
					<input type="submit" class="btn btn-primary" name="btn" value="ACTUALIZAR">
					<?php endforeach ?>
				<?php endforeach ?>
				<input type="hidden" name="m" value="update">
				<input type="hidden" name="mth" value="Drivers">

			</form>
			</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>