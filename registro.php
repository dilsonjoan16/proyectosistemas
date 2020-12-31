<!--Sistema Realizado por: Dilson Joan Porras Ramones
    C.I: 27.675.077
    Carrera: Ing. Sistemas
    Semestre: 6to-->
<?php
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $usuario = $_POST["usuario"];
 $contraseña = $_POST["contraseña"];
 $correo = $_POST["correo"];
 $telefono = $_POST["telefono"];
 $codigo = $_POST["codigo"];
 $localidad = $_POST["localidad"];
 $direccion = $_POST["direccion"];
 $sexo = $_POST["sexo"];
 $cedula = $_POST["cedula"];
 $nacimiento = $_POST["nacimiento"];
 $documento = $_POST["documento"];
 $registro ="usuarios";


if (!empty($nombre) || !empty($apellido) || !empty($usuario) || !empty($contraseña) || !empty($correo) || !empty($telefono) || !empty($codigo) || !empty($localidad) || !empty($direccion) || !empty($sexo) || !empty($cedula) || !empty($nacimiento) || !empty($documento)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "bicentconsejo";

    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()) {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else {
        $SELECT="SELECT usuario from usuarios where usuario = ? limit 1";
        $INSERT="INSERT INTO $registro(nombre,apellido,usuario,constraseña,correo,telefono,codigo,localidad,direccion,sexo,cedula,nacimiento,documento)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt=$conn-> prepare($SELECT);
        $stmt ->bind_param("s",$usuario);
        $stmt ->execute();
        $stmt ->bind_result($usuario);
        $stmt ->store_result();
        $rnum=$stmt->num_rows();
        if($rnum==0){
            $stmt->close();
            $stmt=$conn-> prepare($INSERT);
            $stmt->bind_param('sssssiisssiss',$nombre,$apellido,$usuario,$contraseña,$correo,$telefono,$codigo,$localidad,$direccion,$sexo,$cedula,$nacimiento,$documento);
            $stmt->execute();
                echo "<script>alert('REGISTRO COMPLETADO')</script>";     
        }
        else {
            echo "<script>alert('El usuario ingresado ya se encuentra en uso.')</script> <br>";
            echo "<script>alert('Para poder continuar le recomendamos ingresar otro.')<script> <br>";
        }
        $stmt->close();
        $conn->close();
    }
}
else {
    echo "<script>alert('Todos los datos son obligatorios')</script>";
    die();
}
?>