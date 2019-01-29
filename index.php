<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT * FROM equipo");
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>

    <div class="container">

      <nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">

    </ul>
  </div>
</nav>

    <h3>Ejemplo Liga</h3>
    <h2>Jugadores</h2>
    <table>
      <tr>
        <td>Id Equipo</td>
        <td>Nombre</td>
        <td>Ciudad</td>
      </tr>
      <?php
      foreach ($resultado as $jugador) {
        echo "<tr>";
        echo "<td>".$jugador{'id_equipo'}."</td>";
        echo "<td>".$jugador{'nombre'}."</td>";
        echo "<td>".$jugador{'ciudad'}."</td>";
        echo "</tr>";
      }
      ?>
    </table>
  </div>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
