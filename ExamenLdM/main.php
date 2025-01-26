<?php
    $nombre_apellidos = $_POST["nombre-apellidos"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $tipo_libro = $_POST["tipo-libro"];
    $promocion = $_POST["promocion"];

    echo "<p>Nombre y apellidos: " . $nombre_apellidos . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Teléfono: " . $telefono . "</p>";
    echo "<p>Mensaje: " . $mensaje . "</p>";
    echo "<p>Tipo libro: " . $tipo_libro . "</p>";
    echo "<p>Promoción: " . $promocion . "</p>";
?>