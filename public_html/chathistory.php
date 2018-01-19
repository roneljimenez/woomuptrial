<?php
include 'controller.php'
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Últimos Mensajes enviados (ultimos 25)</h3>
    <table>
      <tr>
        <td>Mensaje enviado</td>
        <td>Enviado por:</td>
        <td>Fecha de envío</td>
        <td>Id Chat</td>
      </tr>
        <?php
        $temporary = new db_connect();
        $response = $temporary->select_chats();

        foreach ($response as $chat) {
          echo '<tr><td>'.$chat['message'].'</td>';
          echo '<td>'.$chat['id_user'].'</td>';
          echo '<td>'.$chat['chat_date'].'</td>';
          echo '<td>'.$chat['id_chat'].'</td></tr>';
        }
        ?>
    </table>
  </body>
</html>
