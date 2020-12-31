<!--Sistema Realizado por: Dilson Joan Porras Ramones
    C.I: 27.675.077
    Carrera: Ing. Sistemas
    Semestre: 6to-->
<?php
        include("conexionboletin.php");
        $registro = "SELECT * FROM registro";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.C Bicentenario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS3/reset.css">
    <link rel="stylesheet" href="CSS3/estilos.css">
    <link rel="stylesheet" href="CSS3/estilosboletin.css">
    <link rel="stylesheet" href="normalizar.css">
    <script src="Js/animacion.js"></script>
    <link rel="shortcut icon" href="IMAGENES/icono.png" type="image/x-icon">
</head> 
<body>  
     <div>  
        <header class="cabecera1">
            <figure>
                <img class="imago4" src="IMAGENES/icono.png" alt="">
            </figure>
            <h1 class="cabecera2">
                Consejo Comunal Bicentenario
            </h1>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light barra">
            <a class="navbar-brand" href="practica 1.html">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="contacto.html">Quienes somos <span class="sr-only"></span></a>
                <a class="nav-link" href="registro.html">Registro</a>
                <a class="nav-link" href="logueo.html">Logueo</a>
                <a class="nav-link disabled" href="practica 1.html" tabindex="-1" aria-disabled="true">Consejo Comunal Bicentenario</a>
              </div>
            </div>
          </nav>
        <!--<nav>
            <ul>
                <li>
                    <a href="#">Boletin informativo</a>
                </li>
                <li>
                    <a href="#">Quienes somos</a>
                </li>-->
            <!--<li>
                    <a href="contacto.html">Conctactanos</a>
                </li>
                <li>
                    <a class="regi" href="registro.html" onclick="descripcion()">Registro</a>
                </li>
                <li>
                    <a class="regi2" href="logueo.html" onclick="descripcion()">Logueo</a>
                </li>
            </ul>
        </nav>-->
    <!--<aside> 
            <blockquote class="bk">Primer elemento</blockquote>
            <blockquote class="bk">Segundo elemento</blockquote>
            <blockquote class="bk">Tercer elemento</blockquote>
        </aside> --> 
        <section>
            <!--Utilizacion de Grid en la siguiente table-->
           <div class="container-2">
                <div class="table-titulo">
                        Datos del usuario
                </div>
                <div class="table-cabecera">
                        Nombre
                </div>
                <div class="table-cabecera">
                        Apellido
                </div>
                <div class="table-cabecera">
                        Usuario
                </div>
                <div class="table-cabecera">
                        Password
                </div>
                <div class="table-cabecera">
                        Correo  
                </div>
                <div class="table-cabecera">
                        Codigo telefonico
                </div>
                <div class="table-cabecera">
                        Nº telefonico
                </div>
                <div class="table-cabecera">
                        Localidad
                </div>
                <div class="table-cabecera">
                        Direccion
                </div>
                <div class="table-cabecera">
                        Genero
                </div>
                <div class="table-cabecera">
                        Nacimiento
                </div>
                <div class="table-cabecera">
                        Tip de DNI
                </div>
                <div class="table-cabecera">
                        DNI
                </div>
                <?php
                        $resultado = mysqli_query($conn, $registro);
                        while ($row = mysqli_fetch_assoc($resultado)) {
                        
                        
                ?>
                <div class="table-elemento">
                        <?php
                        echo $row["nombre"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["apellido"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["usuario"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["password"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["correo"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["codigotelefonico"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["telefono"];
                        ?>
                </div>                
                <div class="table-elemento">
                        <?php
                        echo $row["localidad"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["direccion"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["genero"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["nacimiento"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["tipodni"];
                        ?>
                </div>
                <div class="table-elemento">
                        <?php
                        echo $row["dni"];
                        ?>
                </div>
                <?php
                        }
                ?>
            </div>
        </section>
        <footer class="piedepagina">
            <li>
                Copyright 2020
            </li>
            <li>
                Tachira, Venezuela 5001
            </li>
            <li>
                consejocominalbicent@gmail.com
            </li>
            <li>
                <i>
                    telefono: +58 0276 555555
                </i>
            </li>
        </footer>
    </div> 

</body>
</html>