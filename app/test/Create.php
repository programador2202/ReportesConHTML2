<?php

require_once '../entities/Mascota.entidad.php';
require_once '../models/Mascota.php';



//ENTIDAD = CONTENEDOR DE DATOS


$entidad= new MascotaEntidad();
$entidad->__SET('idpropetario', valor: 1);
$entidad->__SET('tipo', valor: 'Gato');
$entidad->__SET('nombre', valor: 'Bills');
$entidad->__SET('color', valor: 'Gris');
$entidad->__SET('genero', valor: 'Macho');



//Modelo = Accion/logica backend

$mascota= new Mascota();

$idgenerado = $mascota -> create($entidad);
var_dump(value: $idgenerado);


?>