<?php
include 'controller.php';

$chats = new db_connect;
$status = $chats->get_status();

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2>Chats Creados</h2>
     <p><?php echo $status['chats_creados']; ?></p>
     <h2>Chats Inactivos</h2>
     <p><?php echo $status['chats_inactivos']; ?></p>
     <h2>Chats Activos</h2>
     <p><?php echo $status['chats_activos']; ?></p>
     <h2>Chats Efectivos</h2>
     <p><?php echo $status['chats_efectivos']; ?></p>
     <h2>Chats Exitosos</h2>
     <p><?php echo $status['chats_exitosos']; ?></p>
   </body>
 </html>
