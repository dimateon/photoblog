<?php

require_once ROOT.'/models/Image/Image.php';

class fullSize extends Image
{


    public function save($path, $image){

      $pathFullSize = $path .'/';
        $photo_save = $_FILES['image']['tmp_name'];
        $name = md5($photo_save);


       move_uploaded_file($image['tmp_name'], ROOT.$pathFullSize . $image['name'] );
        $full = new Imagick();
        $full->readImage(ROOT.$pathFullSize.$image['name']);    $full->resizeImage(1600, 900, Imagick::FILTER_LANCZOS,1);
        $full->writeImage(ROOT.$pathFullSize.'full'.$image['name']);

        $full->clear();
        $full->destroy();
        $linkFull = $pathFullSize.'full'.$image['name'];
        $id_user = $_SESSION['user'];
        $category = $_POST['category'];

        $thumb = new Imagick();
        $thumb->readImage(ROOT.$pathFullSize.$image['name']);    $thumb->resizeImage(320, 240, Imagick::FILTER_LANCZOS,1);
        $thumb->writeImage(ROOT.$pathFullSize.'thumb'.$image['name']);

        $thumb->clear();
        $thumb->destroy();
        $linkThumb = $pathFullSize.'thumb'.$image['name'];


        $db = Db::getConnection();



        $sql = ('INSERT INTO Images (id_user, linkfull, linkthumb, category) '
                . 'VALUE (:id_user, :linkFull, :linkThumb, :category)');
        $result = $db->prepare($sql);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $result->bindParam(':linkFull', $linkFull, PDO::PARAM_STR);
        $result->bindParam(':linkThumb', $linkThumb, PDO::PARAM_STR);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->execute();


    }
}