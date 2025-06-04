<?php

require_once '../models/Mascota.php';
$mascota= new Mascota();
$parametros=[
  'idPropietario'=>1,
  'tipo'=>"GATO",
  'nombre'=>"Chifu",
  'color'=>"Gris con Blanco",
  'genero'=>"MACHO",
  'idMascota'=>4
];
$num=$mascota->update($parametros);

var_dump($num);