<?php
include 'controller.php';
$match = new db_connect;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <td>Numero de Matchs por dias</td>
        <td>Fecha de creacion de Chats</td>
      </tr>
      <?php
        $result = $match->get_match();
       ?>
    </table>
    <h2>Total Matchs: </h2>
    <p><?php echo $result; ?></p>
  </body>
</html>
