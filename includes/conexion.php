<?php 
class conexion{

var $servidor; 
var $nombreusuario; 
var $password; 
var $db;


public function __construct(){
   $this->servidor = "localhost"; 
   $this->nombreusuario ="root"; 
   $this->password = "admin123"; 
   $this->db = "proyecto";
}

    function conectar(){
echo "oli";

        $conexion = new mysqli($this->$servidor, $this->$nombreusuario, $this->$password, $this->$db);

        if($conexion->connect_error){
            die("Conexión fallida: " . $conexion->connect_error);
        }
        else {
            return $conexion; 
        }
    }

    function logear (){ 
        
        $conexion = conectar();
        echo "si jalo";  
        $sql =  "SELECT * FROM usuarios";
        $resultado = $conexion->query($sql);
      
        if($resultado->num_rows >0){
          while ($row = $resultado ->fetch_assoc()){
              var_dump($row);
          }
        }
    }

  //  print logear();
/* $sql = "INSERT INTO usuarios(id_usuarios, ap_paterno, ap_materno,Nombres,correo_electronico, contraseña, nombre_usaurio)
                    VALUES (2, 'macias', 'escobar', 'fatima celeste', 'celeste_macias@outlook.com','celeste123','celeste' )";

if($conexion->query($sql)=== true){
    echo "no te cortas un cerro";
}else{
    die("si te cortas el cerro" . $conexion->error);
}
 */
}
?>