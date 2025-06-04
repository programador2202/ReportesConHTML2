<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    table{
      width: 100%;
      border-collapse: collapse;
    }
    thead th{
      background-color: aquamarine;
    }
    td, th{
      border: .5px solid black;
      padding: 5px;
    }

    tr:nth-child(even){
      background-color: gray;
    }
  </style>
  <div>
    <table>
    <colgroup>
      <col style="width: 10%">
      <col style="width: 30%">
      <col style="width: 15%">
      <col style="width: 15%">
      <col style="width: 15%">
      <col style="width: 15%">
    </colgroup>
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE MASCOTA</th>
          <th>TIPO</th>
          <th>COLOR</th>
          <th>GÉNERO</th>
          <th>PROPIETARIO</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($listaMascotas as $mascota): ?>
        <tr>
          <td>1</td>
          <td><?=$mascota['nombre']?></td>
          <td><?=$mascota['tipo']?></td>
          <td><?=$mascota['nombre']?></td>
          <td>1</td>
          <td>1</td>
        </tr>
      <?php endforeach ?>

      </tbody>
    </table>
  </div>
</body>
</html>