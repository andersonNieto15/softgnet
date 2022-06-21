<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://soft-g.net/wp-content/uploads/2017/06/logosoftgnet1.png" width="150px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php?mth=Schedulers">Programaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?mth=Vehicles">Vehiculos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?mth=Drivers">Drivers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?mth=Routes">Rutas</a>
        </li>
        
      </ul>
      
        <?php 
          if(isset($_SESSION['login'])):
            echo '<span class="navbar-text">';
            echo $_SESSION['login'];
            echo '</span>';
            echo '<span> <a href="index.php?mth=Login&m=eliminarsesion">Cerrar Sesión</a></span>';
          endif?>
      

    </div>
  </div>
</nav>