<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>El encuentro</title>
   
</head>
<body>
<!--NAV BAR-->
<section>
        <header>
            <div class="logo">
                <img src="imagens/logo.png" alt="">
            </div>
            <div class="title_nav anim">
                <a href="index.html"><h1>El Encuentro</h1></a>
            </div>
            <div class="nav_bar">
                <a href="cortes.html" alt="" class="a_nav" >Cortes</a>
                <a href="productors.html" alt="" class="a_nav">Productos</a>
                <a href="contacto.html" alt="" class="a_nav">Contactanos</a>
                <a href="table.php" class="a_nav">Turnos</a>
            </div>
        </header>
    </section>
    <h1 class="h1">TURNOS:</h1>
<?php
include("conexion.php");
$sql = "SELECT * FROM turnos";
$result = $conexion->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conexion->error);
}

if ($result->num_rows > 0) {
    echo "<table class='user-table'>
            <tr>
                <th>Idx</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fecha</th>
                <th>valor_corte</th>
            </tr>";


    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["idx"] . "</td>
                <td>" . $row["nombre"] . "</td>
                <td>" . $row["apellido"] . "</td>
                <td>" . $row["fecha"] . "</td>
                <td>" . $row["valor_corte"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}


$conexion->close();
?>
<!--FOOTER-->
<footer class="footer">
        <p class="footer__texto">El Encuentro - Todos los derechos Reservados 2023.</p>
    </footer>
</body>
</html>
