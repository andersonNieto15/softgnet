<?php require "layout/header.php" ?>
<div class="container-xxl  table-responsive-xxl">
	<div class="container">
	  <div class="row">
	    <div class="col"></div>
	    <div class="col text-bg-info   p-3 rounded ">
	    	<h1>INICIAR SESIÓN</h1>
			<form action="">
				<label for="">USUARIO</label> <br>
				<input type="text"  class="form-control" name="username"><br>
				<label for="">CONTRASEÑA</label> <br>
				<input type="password"  class="form-control" name="password"><br>
				<input type="submit"  class="btn btn-primary" name="btn"><br>
				<input type="hidden" name="m" value="validar">
				<input type="hidden" name="mth" value="Login">
				<?php 
				if($txt!=''):
					echo $txt;
				endif;
				?>
			</form>
		</div>
	    <div class="col"></div>
	  </div>
	</div>
</div>
<?php require "layout/footer.php" ?>