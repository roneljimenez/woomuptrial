<?php
class db_connect {

  public function create_connection() {

    $db_connection = mysqli_connect("localhost:3306","root","JuventuS25","bd_woomup");

    if (!$db_connection) {

      echo "error de comunicacion con la BD";

    }else {

        return $db_connection;

      }

    }

    public function select_chats() {

      $response = mysqli_query($this->create_connection(),'SELECT * FROM td_chat_history ORDER BY chat_date DESC LIMIT 25 ');

      return $response;

    }

    public function get_match() {
      $query = "SELECT count(date_created_chat) total, date_created_chat FROM td_chat_created GROUP BY date_created_chat";

      $response = mysqli_query($this->create_connection(),$query);

      $i=0;

      foreach ($response as $match) {

        echo "<tr>";
        echo "<td>".$match['total']."</td>";
        echo "<td>".$match['date_created_chat']."</td></tr>";

        $i = $i+1;

      }

      return $i;
    }

    public function get_status() {
      $query = 'SELECT * FROM td_chat_created';
      $all_chats = mysqli_query($this->create_connection(),$query);

      $i=0;

      foreach ($all_chats as $chat) {

        $i = $i+1;

      }

      $query = 'select count(id_chat) total, id_chat from td_chat_history group by id_chat';
      $active_chats = mysqli_query($this->create_connection(),$query);

      $j = mysqli_num_rows($active_chats);

      foreach ($active_chats as $chat) {

        $efective_chat = $this->get_efective($chat['id_chat']);
        $succees_chat = $this->succees_chat($chat['id_chat']);

        if ($efective_chat > 1) {

          $x = $x + 1;

        }
        if ($succees_chat > 1) {

          $y = $y + 1;

        }

      }

      return array('chats_creados'=>$i,'chats_activos'=>$j,'chats_inactivos'=>$i-$j, 'chats_efectivos'=>$x, 'chats_exitosos'=>$y);
    }

    public function get_efective($id_chat) {
      $query = "SELECT count(id_user) mensajes, id_user FROM td_chat_history WHERE id_chat = '$id_chat' GROUP BY id_user";
      $response = mysqli_query($this->create_connection(),$query);

      $h = mysqli_num_rows($response);

      return $h;
    }

    public function succees_chat($id_chat) {
      $query = "SELECT count(id_user) mensajes, id_user FROM td_chat_history WHERE id_chat = '$id_chat' GROUP BY id_user HAVING count(id_user) > 3 ";
      $response = mysqli_query($this->create_connection(),$query);

      $l = mysqli_num_rows($response);

      return $l;
    }

}
 ?>
