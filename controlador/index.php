<?php
require_once("modelo/index.php");
class modeloController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
    function index(){
    	$producto 	=	new Modelo();
		$dato=$producto->mostrar("productos","1");
		require_once("vista/index.php");
    }

    // INSERTAR
    function nuevo(){
    	require_once("vista/nuevo.php");	    	    	
    }
    function guardar(){
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "'".$nombre."','".$precio."'";
    	$producto 	=	new Modelo();
		$dato 		=	$producto->insertar("productos",$data);
		header("location:".urlsite);
    }


    // ACTUALIZAR

    function editar(){
    	$id=$_REQUEST['id'];
    	$producto 	=	new Modelo();
    	$dato=$producto->mostrar("productos","id=".$id);    	
    	require_once("vista/editar.php");
    }
    function update(){
    	$id 		= 	$_REQUEST['id'];
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "nombre='".$nombre."', precio=".$precio;
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos",$data,$condicion);
        header("location:".urlsite);
	}

    // ELIMINAR

	function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("productos",$condicion);
		header("location:".urlsite);
	}
}

class modeloControllerDrivers{
    private $modelDrivers;
    function __construct(){
        $this->modelDrivers=new Modelo();
    }
    // MOSTRAR
    function index(){
        $producto   =   new Modelo();
        $dato=$producto->mostrar("users.*,city.*","users INNER JOIN city ON city.id_city=users.city","1");
        require_once("vista/indexDrivers.php");
    }

    // INSERTAR
    function nuevo(){
        $tp_ident   =   new Modelo();
        $tipos_id=$tp_ident->mostrar("id_tp_id,tp_name","identification_type","1");
        $ciudades = new Modelo();
        $listadoCiudades = $ciudades->mostrar("id_city,city_name","city","1");
        require_once("vista/nuevoDriver.php");                    
    }
    function guardar(){
        $tp_id      =   $_REQUEST['tp_id'];
        $number_id  =   $_REQUEST['number_id'];
        $nombre     =   $_REQUEST['nombre'];
        $apellido   =   $_REQUEST['apellido'];
        $ciudad     =   $_REQUEST['ciudad'];
        $email      =   $_REQUEST['email'];
        $direccion  =   $_REQUEST['direccion'];        
        $telefono   =   $_REQUEST['telefono'];
        
        $data       =   "'".$tp_id."','".$number_id."','".$nombre."','".$apellido."','".$ciudad."','".$email."','".$direccion."','".$telefono."',1";
        $producto   =   new Modelo();
        $dato       =   $producto->insertar("users",$data);
        header("location:".urlsite."index.php?mth=Drivers");
    }


    // ACTUALIZAR

    function editar(){
        $id=$_REQUEST['id'];
        $producto           = new Modelo();
        $ciudades           = new Modelo();
        $listadoCiudades    = $ciudades->mostrar("id_city,city_name","city","1");
        $tp_ident           = new Modelo();
        $tipos_id           = $tp_ident->mostrar("id_tp_id,tp_name","identification_type","1");
        $dato               = $producto->mostrar("users.*,city.*","users INNER JOIN city ON city.id_city=users.city","id_user=".$id);        
        require_once("vista/editarDriver.php");
    }
    function update(){
        
        $id          =   $_REQUEST['id'];
        $tp_id       =   $_REQUEST['tp_id'];
        $number_id   =   $_REQUEST['number_id'];
        $nombre      =   $_REQUEST['nombre'];
        $apellido    =   $_REQUEST['apellido'];
        $direccion   =   $_REQUEST['direccion'];
        $ciudad      =   $_REQUEST['ciudad'];
        $email       =   $_REQUEST['email'];
        $telefono    =   $_REQUEST['telefono'];

        $data       =   "fk_tp_id='".$tp_id."',number_id='".$number_id."',first_name='".$nombre."',last_name='".$apellido."',address='".$direccion."',city='".$ciudad."',email='".$email."', phone=".$telefono;
        $condicion  =   "id_user=".$id;
        $producto   =   new Modelo();
        $dato       =   $producto->actualizar("users",$data,$condicion);
        header("location:".urlsite."index.php?mth=Drivers");
    }

    // ELIMINAR

    function eliminar(){        
        $id         =   $_REQUEST['id'];        
        $condicion  =   "id_user=".$id;
        $producto   =   new Modelo();        
        $dato       =   $producto->eliminar("users",$condicion);
        header("location:".urlsite."index.php?mth=Drivers");
    }
}

class modeloControllerVehicles{
    private $modelVehicle;
    function __construct(){
        $this->modelVehicle=new Modelo();
    }
    // MOSTRAR
    function index(){
        $producto   =   new Modelo();
        $dato=$producto->mostrar("*","vehicles","1");
        require_once("vista/indexVehicles.php");
    }

    // INSERTAR
    function nuevo(){
        require_once("vista/nuevoVehicle.php");                    
    }
    function guardar(){
        $description      =   $_REQUEST['description'];
        $year             =   $_REQUEST['year'];
        $make             =   $_REQUEST['make'];
        $capacity         =   $_REQUEST['capacity'];
        
        $data       =   "'".$description."','".$year."','".$make."','".$capacity."',1";
        $producto   =   new Modelo();
        $dato       =   $producto->insertar("vehicles",$data);
        header("location:".urlsite."index.php?mth=Vehicles");
    }


    // ACTUALIZAR

    function editar(){
        $id=$_REQUEST['id'];
        $producto   =   new Modelo();
        $dato=$producto->mostrar("*","vehicles","id_vehicles=".$id);        
        require_once("vista/editarVehicle.php");
    }
    function update(){
        
        $id               =   $_REQUEST['id'];
        $description      =   $_REQUEST['description'];
        $year             =   $_REQUEST['year'];
        $make             =   $_REQUEST['make'];
        $capacity         =   $_REQUEST['capacity'];
        $active           =   $_REQUEST['active'];

        $data       =   "description='".$description."',year='".$year."',make='".$make."',capacity='".$capacity."',active=".$active;
        $condicion  =   "id_vehicles=".$id;
        $producto   =   new Modelo();
        $dato       =   $producto->actualizar("vehicles",$data,$condicion);
        header("location:".urlsite."index.php?mth=Vehicles");
    }

    // ELIMINAR

    function eliminar(){        
        $id         =   $_REQUEST['id'];        
        $condicion  =   "id_vehicles=".$id;
        $producto   =   new Modelo();        
        $dato       =   $producto->eliminar("vehicles",$condicion);
        header("location:".urlsite."index.php?mth=Vehicles");
    }
}



class modeloControllerRoutes{
    private $modelRoutes;
    function __construct(){
        $this->modelRoutes=new Modelo();
    }
    // MOSTRAR
    function index(){
        $producto   =   new Modelo();
        $dato=$producto->mostrar("vehicles.description as descVehiculo,vehicles.*,routes.*,users.first_name,users.last_name","routes INNER JOIN users ON routes.fk_driver_id=users.id_user INNER JOIN vehicles ON routes.fk_vehicle_id=vehicles.id_vehicles","1");
        require_once("vista/indexRoutes.php");
    }

    // INSERTAR
    function nuevo(){
        $vehiculos = new Modelo();
        $listadoVehiculos=$vehiculos->mostrar("id_vehicles,description","vehicles","1");
        require_once("vista/nuevoRoutes.php");                    
    }
    function guardar(){
        $description      =   $_REQUEST['description'];
        $fk_driver_id     =   $_REQUEST['fk_driver_id'];
        $fk_vehicle_id    =   $_REQUEST['fk_vehicle_id'];
        $active           =   $_REQUEST['active'];
        $data             =   "'".$description."','".$fk_driver_id."','".$fk_vehicle_id."','".$active."'";
        $producto         =   new Modelo();
        $dato             =   $producto->insertar("routes",$data);
        header("location:".urlsite."index.php?&mth=Routes");
    }


    // ACTUALIZAR

    function editar(){
        $id=$_REQUEST['id'];
        $producto   =   new Modelo();
        $dato=$producto->mostrar("*","routes","id_routes=".$id);
        $listaVehiculos=$producto->mostrar("id_vehicles,description","vehicles","active=1");        
        require_once("vista/editarRoutes.php");
    }
    function update(){
        
        $id               =   $_REQUEST['id'];
        $description      =   $_REQUEST['description'];
        $fk_driver_id     =   $_REQUEST['fk_driver_id'];
        $fk_vehicle_id    =   $_REQUEST['fk_vehicle_id'];
        $active           =   $_REQUEST['active'];

        $data       =   "description='".$description."',fk_driver_id='".$fk_driver_id."',fk_vehicle_id='".$fk_vehicle_id."',active=".$active;
        $condicion  =   "id_routes=".$id;
        $producto   =   new Modelo();
        $dato       =   $producto->actualizar("routes",$data,$condicion);
        header("location:".urlsite."index.php?mth=Routes");
    }

    // ELIMINAR

    function eliminar(){        
        $id         =   $_REQUEST['id'];        
        $condicion  =   "id_routes=".$id;
        $producto   =   new Modelo();        
        $dato       =   $producto->eliminar("routes",$condicion);
        header("location:".urlsite."index.php?&mth=Routes");
    }
}

class modeloControllerSchedulers{
    private $modelSchedulers;
    function __construct(){
        $this->modelSchedulers=new Modelo();
    }
    // MOSTRAR
    function index(){
        $producto   =   new Modelo();
        $dato=$producto->mostrar("sch.id_scheduler,rou.description as Descrip_ruta,concat(users2.first_name,' ',users2.last_name) as Driver,veh.description as Descrip_vehiculo,veh.make as Marca_vehiculo,veh.capacity as Capacidad,sch.week_num as Semana_asignada,city.city_name as Ciudad_salida,city2.city_name as Ciudad_destino,users.user_name as Creador,sch.date_assigned as Fecha_asignacion","schedulers sch
            inner join routes rou on sch.fk_route_id=id_routes
            inner join city on sch.from_city=city.id_city
            inner join city city2 on city2.id_city= sch.to_city
            inner join system_users users on users.id_system_user=sch.fk_id_creator
            inner join users users2 on users2.id_user = rou.fk_driver_id
            inner join vehicles veh on rou.fk_vehicle_id=veh.id_vehicles","1");
        require_once("vista/indexSchedulers.php");
    }

    // INSERTAR
    function nuevo(){
        $producto =  new Modelo();
        $listadoRutas = $producto->mostrar("id_routes,description","routes","1");
        $ciudades = new Modelo();
        $listadoCiudades = $ciudades->mostrar("id_city,city_name","city","1");
        require_once("vista/nuevoSchedulers.php");                    
    }
    function guardar(){
        $route      =   $_REQUEST['routeid'];
        $week_route     =   $_REQUEST['week'];
        $from_city    =   $_REQUEST['from_city'];
        $to_city    =   $_REQUEST['to_city'];
        $active    =   $_REQUEST['active'];
        date_default_timezone_set('America/Bogota');
        $fecha_actual= date("Y/m/d H:i:s");
        $data = "".$route.",".$week_route.",".$from_city.",".$to_city.",".$active.",1,'".$fecha_actual."'";
        $producto   =   new Modelo();
        $dato       =   $producto->insertar("schedulers",$data);
        header("location:".urlsite."index.php?mth=Schedulers");
    }


    // ACTUALIZAR

    function editar(){
        $producto =  new Modelo();
        $listadoRutas = $producto->mostrar("id_routes,description","routes","1");
        $ciudades = new Modelo();
        $listadoCiudades = $ciudades->mostrar("id_city,city_name","city","1");


        $id=$_REQUEST['id'];
        $producto   =   new Modelo();
        $dato=$producto->mostrar("*","schedulers","id_scheduler=".$id);
        // $listaVehiculos=$producto->mostrar("id_vehicles,description","schedulers","active=1");        
        require_once("vista/editarSchedulers.php");
    }

    function update(){
        $id         =   $_REQUEST['id'];   
        $routeid  =   $_REQUEST['routeid'];
        $week      =   $_REQUEST['week'];
        $from_city     =   $_REQUEST['from_city'];
        $to_city    =   $_REQUEST['to_city'];
        $active           =   $_REQUEST['active'];

        $data       =   "fk_route_id='".$routeid."',week_num='".$week."',from_city='".$from_city."',to_city='".$to_city."',active=".$active;
        $condicion  =   "id_scheduler=".$id;
        $producto   =   new Modelo();
        $dato       =   $producto->actualizar("schedulers",$data,$condicion);
        header("location:".urlsite."index.php?mth=Schedulers");
    }

    // ELIMINAR

    function eliminar(){        
        $id         =   $_REQUEST['id'];        
        $condicion  =   "id_scheduler=".$id;
        $producto   =   new Modelo();        
        $dato       =   $producto->eliminar("schedulers",$condicion);
        header("location:".urlsite."index.php?mth=Schedulers");
    }
}

class modeloControllerLogin{
    private $modelLogin;
    function __construct(){
        $this->modelLogin=new Modelo();
    }

    function index(){
        $txt = '';
        require_once("vista/indexLogin.php");                    
    }

    function validar(){
        $username     =   $_REQUEST['username'];
        $password     =   $_REQUEST['password'];
        $producto     =   new Modelo();
        $dato=$producto->mostrar("*","system_users"," user_name='".$username."' and password='".$password."'");
        if(empty($dato)){
            $txt = "Credenciales de acceso inválidas";
            // require_once("vista/indexLogin.php");
            header("location:".urlsite."index.php");                    
        }else{
            $_SESSION['login']=$username;
            header("location:".urlsite."index.php");
        }
    }

    function eliminarsesion(){
        unset($_SESSION['login']);
        unset($_SESSION['idlogin']);
        header("location:".urlsite."index.php");
    }
}