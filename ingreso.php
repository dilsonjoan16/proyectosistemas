<!--Sistema Realizado por: Dilson Joan Porras Ramones
    C.I: 27.675.077
    Carrera: Ing. Sistemas
    Semestre: 6to-->
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$correo = $_POST['correo'];
$codigotelefonico = $_POST['codigotelefonico'];
$telefono = $_POST['telefono'];
$localidad = $_POST['localidad'];
$direccion = $_POST['direccion'];
$genero = $_POST['genero'];
$nacimiento = $_POST['nacimiento'];
$tipodni = $_POST['tipodni'];
$dni = $_POST['dni'];

if (!empty($nombre) || !empty($apellido) ||!empty($usuario) ||!empty($password) ||!empty($correo) ||!empty($codigotelefonico) ||!empty($telefono) ||!empty($localidad) ||!empty($direccion) ||!empty($genero) ||!empty($nacimiento) ||!empty($tipodni) ||!empty($dni)  ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "bicentconsejo";

    //creando la conexion
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error() );
    } else {
        $SELECT = "SELECT usuario From registro Where usuario = ? Limit 1";
        $INSERT = "INSERT Into registro (nombre, apellido, usuario, password, correo, codigotelefonico, telefono, localidad, direccion, genero, nacimiento, tipodni, dni) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //preparando la sentencia
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($usuario);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssiissssss", $nombre, $apellido, $usuario, $password, $correo, $codigotelefonico, $telefono, $localidad, $direccion, $genero, $nacimiento, $tipodni, $dni);
            $stmt->execute();
            /*echo "<script>alert('Felicidades se registro con exito!')</script>";*/
            echo'<script type="text/javascript">
            alert("Felicidades se registro con exito!");
            window.location.href="practica 1.html";
            </script>';
        } else {
            /*echo "<script>alert('El usuario ingresado ya se encuentra en uso Intente con otro nuevamente')</script>";*/
            echo'<script type="text/javascript">
            alert("El usuario ingresado ya se encuentra en uso Intente con otro nuevamente");
            window.location.href="registro.html";
            </script>';
        }
        $stmt->close();
        $conn->close();
    }
} else {
    /*echo "<script>alert('Todos los campos son obligatorios')</script>";*/
    echo'<script type="text/javascript">
    alert("Todos los campos son obligatorios, revise nuevamente!");
    window.location.href="registro.html";
    </script>';
    die();
}
?>