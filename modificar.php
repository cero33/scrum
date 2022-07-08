<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaphora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body style="background-color: #e29578;">
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.php" style="font-family: Staatliches; margin-left: 695px; margin-top: 5px;color: white; text-decoration: none;"><h1>Metaphora</h1></a>
        </nav>
    </header>
    <body>
        <div class="form" style="background-color: #212529; width: 400px; height: 500px; margin-top: 100px; margin-left: 570px">
            <form action="" method="get">
                <label for="" style="color: white; margin-top: 60px; margin-left: 40px;">Nombre de producto</label>
                <label for="" style="color: white; margin-left: 110px;">Cantidad</label>
                <br>
                <input type="text" name="" id="nombreProducto" style="margin-left: 40px; width: 250px; float: left;">
                <input type="number" name="" id="cantidad" style="margin-left: 10px;width: 75px;">
                <br><br>

                <label for="" style="color: white; margin-left: 40px;">Direccion del almacen</label>
                <br>
                <input type="text" name="" id="direccion" style="margin-left: 40px; width: 250px;">
                <br><br>

                <label for="" style="color: white; margin-left: 40px;">Fecha de llegada</label>
                <br>
                <input type="date" name="" id="fechaLlegada" style="margin-left: 40px;">
                <br><br>

                <label for="" style="color: white; margin-left: 40px;">Hora de llegada</label>
                <br>
                <input type="time" name="" id="horaLlegada" style="margin-left: 40px;">


                <br><br><br><br>
                <input type="submit" style="margin-left: 165px; margin-top: 20px;" class="btn btn-light" value="Ingresar">
            </form>
        </div>
    </body>
    <footer style="margin-top: 96px;">
        <nav class="navbar navbar-dark bg-dark"></nav>
    </footer>
</body>
</html>

