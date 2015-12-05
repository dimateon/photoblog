<?php


include_once ROOT.'/models/User.php';

class Likes
{
    public static function addLikes($id) {

        $id = intval($id);

        if (isset($_SESSION['user'])) {


            $id_user = $_SESSION['user'];
            $id_image = $id;


            if (!Likes::checkLikes($id_user, $id_image)) {
                if ($id) {


                    $db = Db::getConnection();
                    $sql = 'UPDATE Images SET likes = likes +1 '
                        . 'WHERE id = :id';

                    $result = $db->prepare($sql);
                    $result->bindParam(":id", $id, PDO::PARAM_INT);
                    $result->execute();

                    $sql = 'INSERT INTO likes (id_user, id_image, checky)'
                        . 'VALUE (:id_user, :id_image, 1)';

                    $result = $db->prepare($sql);
                    $result->bindParam(":id_user", $id_user, PDO::PARAM_INT);
                    $result->bindParam(":id_image", $id_image, PDO::PARAM_INT);
                    $result->execute();


                    return true;
                }
            }

        }


    }

    public  static  function showLike($id) {
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();

            $sql = 'SELECT likes FROM Images WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(":id", $id, PDO::PARAM_INT);
            $result->execute();
            $likes = $result->fetch();
            return $likes;
        }
    }


    public static function checkLikes($id_user, $id_image)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM `likes` WHERE (`id_user` = :id_user) AND (`id_image` = :id_image) AND (`checky` = 1)';


        $result= $db->prepare($sql);
        $result->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        $result->bindParam(":id_image", $id_image, PDO::PARAM_INT);
        $result->execute();
        $item = $result->fetch();
        if($item > 0 ) {
            return true;
        } else {
            return false;

        }


    }



}