Hola Jorge, a continuacion te describo el proyecto por partes:

index:
en esta landing encontraras tres links:
  - "ver historial de chats recientes"-> muestra los ultimos 25 mensajes enviados (perdon por tiempo no pude paginarlos)

  - "ver historial de match por dia"-> en un landing despliega una tabla con los resultados del total de chats creados en un mismo día y al final la suma total de matchs, DECIDÍ TOMAR EN CUENTA TAMBIEN AQUELLOS DIAS EN QUE SE CREO UN SOLO CHAT, EN CASO DE QUE LOS MATCH SE CUENTEN SOLO PARA DOS O MAS CHATS CREADOS EN UNA FECHA ACÁ DEJO EL query="SELECT count(date_created_chat) total, date_created_chat FROM td_chat_created GROUP BY date_created_chat HAVING count(date_created_chat) > 1".

  -"ver status de chats"-> en un landing despliega estadisticas acerca de chats creados, activos, efectivos y exitosos.

  OJO1: te anexo BD en sql para que la puedas importar. la misma cuenta con dos tablas y sus respectivos registros tomados del archivo que enviaste.

  OJO2: las credenciales de conexion (usuario, contraseña y nombreBD) deben ser configuradas para que las consultas tengan efecto. dejo mis credenciales como ejemplo en la funcion create_connection() en controller.php

  OJO3: cree un script controller.php donde se ubican las funciones que utilicé, allí las ubique en orden según el orden de uso pensando en los links del inicio.

  OJO4: por cuestiones de tiempo no comenté ninguna función, sin embargo usé nombres de funciones y variables bastante intuitivas y un proceso lógico ordenado. Tampoco estilicé las vistas (perdón por eso, de tener más tiempo disponible lo hago).

  PD: Por favor dejame saber tu opinión del proyecto, cualquier comentario es bien recibido y me servirá ṕara seguir mejorando.

  Saludos Cordiales.
