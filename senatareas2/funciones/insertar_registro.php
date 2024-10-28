<?php
require '../crear_cuenta.php';
$insertar_datos = capturarDatos();
if ($insertar_datos === null) {
    die("No se han enviado datos.");
}

// Captura de datos
$identificacion = intval($insertar_datos['identifica']);
$nombre1 = $insertar_datos['nombre1'];
$nombre2 = $insertar_datos['nombre2'];
$apellido1 = $insertar_datos['apellido1'];
$apellido2 = $insertar_datos['apellido2'];
$fecha = $insertar_datos['fecha_nac'];
$celular = $insertar_datos['celular'];
$email = $insertar_datos['email']; 
$rol = $insertar_datos['rol'];
$contra = $insertar_datos['contra'];
$fechaNac = date('Y-m-d', strtotime($fecha));

// Incluir archivo de conexión
require '../includes/conexion_bd.php';

// Preparar la consulta
$sql = "INSERT INTO aprendices (cod, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nac, celular, email, contra) VALUES ('$identificacion','$nombre1','$nombre2','$apellido1','$apellido2','$fechaNac','$celular','$email','$contra')";
$sql1 = "INSERT INTO usuarios (email, contra, rol) VALUES ('$email','$contra', '$rol')";

// Ejecutar las consultas y manejar errores
$consul = mysqli_query($coneccion, $sql);
if (!$consul) {
    die("Error en la consulta de aprendices: " . mysqli_error($coneccion));
}

$consul1 = mysqli_query($coneccion, $sql1);
if (!$consul1) {
    die("Error en la consulta de usuarios: " . mysqli_error($coneccion));
}

// Cerrar la conexión
mysqli_close($coneccion);

echo "Datos insertados correctamente.";
?>
