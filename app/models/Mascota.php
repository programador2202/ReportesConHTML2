<?php
require_once '../config/Database.php';
require_once '../entities/Mascota.entidad.php';



class Mascota {

  private $pdo =null;

  public function __construct(){$this ->pdo =Database::getConexion(); }

  public function create(MascotaEntidad $entidad):int{
    $sql= "INSERT INTO MASCOTAS (idpropetario, tipo, nombre, color, genero)VALUES (?,?,?,?,?)";
    $query =$this ->pdo->prepare(query:$sql);
    $query->execute(params:[
        $entidad ->__GET(atributo: 'idpropetario'),
        $entidad ->__GET(atributo: 'tipo'),
        $entidad ->__GET(atributo: 'nombre'),
        $entidad ->__GET(atributo: 'color'),
        $entidad ->__GET(atributo: 'genero'),
    ]);
    return $this ->pdo->lastInsertId(); //obtenemos el ultimo ID
  }

  public function getAll():array{
    $sql="
    
SELECT 
	Ma.idmascota,
    Ma.nombre,
    Ma.tipo,
    Ma.color,
    Ma.genero,
    CONCAT(pr.apellidos,'',pr.nombres) 'propietarios'
	  FROM mascotas Ma
    INNER JOIN PROPETARIOS pr ON Ma.idpropetario = PR.idpropetario
    ORDER BY Ma.nombre;
    
    ";
  $query= $this->pdo->prepare(query:$sql);
  $query -> execute();
  //FETCH_CLASS (coleccion de objetos)
  //FETCH_ASSOC (coleccion de drreglos asociativos)
  return $query->fetchAll(PDO::FETCH_ASSOC);   }

  public function getById():array{
    return[];
  }

  public function delete ():int{
    return 0;
  }

 public function update($params = []): int {
    $sql = "UPDATE MASCOTAS SET
                idpropetario = ?, 
                tipo = ?, 
                nombre = ?, 
                color = ?, 
                genero = ?
            WHERE idmascota = ?";

    $query = $this->pdo->prepare($sql);
    $query->execute([
        $params['idpropetario'],
        $params['tipo'],
        $params['nombre'],
        $params['color'],
        $params['genero'],
        $params['idmascota']
    ]);

    return $query->rowCount() ;
}

}



?>