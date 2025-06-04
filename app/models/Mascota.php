<?php
require_once '../config/Database.php';
require_once '../entities/Mascota.entidad.php';
/**
 * Esta clase ocntiene logica para interactuar con la base de datos
 */
class Mascota{
  private $pdo=null;
  public function __construct(){$this->pdo=Database::getConexion();}

  public function create(MascotaEntidad $entidad):int {
    $sql="INSERT INTO MASCOTAS(idPropietario,tipo,nombre,color,genero) VALUES(?,?,?,?,?)";
    $query=$this->pdo-> prepare($sql);
    $query->execute([
      $entidad->__GET('idPropietario'),
      $entidad->__GET('tipo'),
      $entidad->__GET('nombre'),
      $entidad->__GET('color'),
      $entidad->__GET('genero')
    ]);
    return $this->pdo->lastInsertId();//Obtenemos el último ID
  }

  public function getAll():array{
    $sql=" 
    SELECT 
    MA.idMascota,
    MA.nombre,
    MA.tipo,
    MA.color,
    MA.genero,
    CONCAT(PR.apellidos, ' ',PR.nombres) 'propietario'
    FROM MASCOTAS MA
    INNER JOIN PROPIETARIO PR ON MA.idPropietario=PR.idPropietario
    ORDER BY MA.nombre
  ";
  $query=$this->pdo->prepare($sql);
  $query->execute();
  //FETCH_CLASS(COLECCIÓN DE OBJETOS)
  //FETCH_ASSOC(COLECCIÓN DE ARREGLOS ASOCIATIVOS)
  return $query->fetchAll(PDO::FETCH_CLASS);
  }

  public function getById():array{
    return [];
  }

  public function delete():int{
    return 0;
  }
  /**
   * Actualiza los datos de la mascota
   * @param mixed Arreglo que contiene los campos rewqueridos 
   * @return int Número de filas afectadas por la acualización
   */
  public function update($params =[]):int{
    $sql=" 
    UPDATE MASCOTAS SET
     idPropietario=?,
     tipo=?,nombre=?,
     color=?,
     genero=?
    WHERE idMascota=?";
    $query=$this->pdo->prepare($sql);
    $query->execute([
      $params['idPropietario'],
      $params['tipo'],
      $params['nombre'],
      $params['color'],
      $params['genero'],
      $params['idMascota']
    ]);
    return $query->rowCount();
  }
}
