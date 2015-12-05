<?php

class Counter extends Database
{
  public static function addCount ($id) {


      $db = Db::getConnection();

      $sql = 'UPDATE Images SET views = views +1 '
          . 'WHERE id = :id';

      $result = $db->prepare($sql);


      $result->bindParam(":id", $id, PDO::PARAM_INT);

      $result->execute();
     }
    public  static  function showCounter($id) {
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();

            $sql = 'SELECT views FROM Images WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(":id", $id, PDO::PARAM_INT);
            $result->execute();
            $likes = $result->fetch();
            return $likes;
        }
    }

}
