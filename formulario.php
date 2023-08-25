<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Crud en PHP y MySQL</h1>
    <form action="formulario.php" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="" class="form-label">Identificacion</label>
            <input type="text" name="id" class="form-control" placeholder="Ingrese su CC">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Nombres</label>
            <input type="text" name="nombres" class="form-control" placeholder="Ingrese su nombre completo">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" placeholder="Ingrese su apellido completo">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Telefono de Contacto</label>
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese su telefono de contacto">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="fecha" class="form-control" placeholder="Ingrese su fecha de nacimiento">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" placeholder="correoejemplo@gmail.com">
        </div>
        <div class="col-md-6">
            <input type="submit" value="Guardar" class="btn btn-primary" name="guardar">
        </div>
    </form>

    <?php
    //$_POST["name"] Forma de apuntar a un elemento
        if (isset($_POST["guardar"])) {
            include ("conexion.php");
            $id = $_POST["id"];
            $nombres = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $telefono = $_POST["telefono"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];

            //Consulta a la base de datos
            mysqli_query($conexion,"INSERT INTO registro (id,nombres,apellidos,telefono,fecha,correo) VALUES('$id','$nombres','$apellidos','$telefono','$fecha','$correo') ");
            echo "Datos guardados correctamente";
        };

    ?>
    




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>