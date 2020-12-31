<!--Sistema Realizado por: Dilson Joan Porras Ramones
    C.I: 27.675.077
    Carrera: Ing. Sistemas
    Semestre: 6to-->
<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "condominio";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    if (!$conn) {
        die("No hay conexion: ".mysqli_connect_error());
    }
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    
    $query = mysqli_query($conn, "SELECT * FROM registro WHERE usuario = '".$usuario."' and password = '".$password."'");
    $nr = mysqli_num_rows($query);

    if ($nr==1) {
       
       /* header("Location: practica 1.html");
        echo "<script>alert('Bienvenido al sistema '.$usuario)</script>";*/
        echo'<script type="text/javascript">
        alert("Usuario validado, bienvenido al sistema administrador");
        window.location.href="boletin.php";
        </script>';
    }
    elseif ($nr == 0) {
        
        /*header("Location: logueo.html");
        echo "<script>alert('El usuario o password son incorrectos')</script>";*/
        echo'<script type="text/javascript">
        alert("El usuario o password son incorrectos, intentelo nuevamente");
        window.location.href="logueoadmin.html";
        </script>';
    }
?>