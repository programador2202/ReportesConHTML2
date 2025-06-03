<?php
require_once '../models/Mascota.php';

$mascota= new Mascota();

$parametros=[
"idpropetario" => 2,
"tipo"         => "Gato",
"nombre"       => "Chifu",
"color"        => "Gris con blanco",
"genero"       => "Macho",
"idmascota"    => 5
];

$num= $mascota->update($parametros);
var_dump($num)
?>

