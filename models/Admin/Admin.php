<?php

abstract class Admin
{
    protected static function checkAdmin() {
        if($_SESSION['admin'] = 1)
            return true;
        return false;
    }

    protected static function addCategory($category_name, $thumbCategory, $hidden)
    {
        $galleryPath = '/uploads/';

        $path = $galleryPath . $category_name . '/' . $thumbCategory['name'];
        if (!is_dir($$path)) {
            mkdir($$path, 0777, true);
            move_uploaded_file($thumbCategory['tmp_name'], ROOT . $path . $thumbCategory['name']);

            $thumb = new Imagick();
            $thumb->readImage(ROOT . $path . $thumbCategory['name']);
            $thumb->resizeImage(320, 240, Imagick::FILTER_LANCZOS, 1);
            $thumb->writeImage(ROOT . $path . 'thumb' . $thumbCategory['name']);

            $thumb->clear();
            $thumb->destroy();
            $linkThumb = $path . 'thumb' . $thumbCategory['name'];

            $db = Db::getConnection();

            $sql = 'INSERT INTO category (category_name,  thumbCategory, hidden) '
                . ' VALUE (:category_name, :thumbCategory , :hidden)';

            $result = $db->prepare($sql);
            $result->bindParam(':category_name', $category_name, PDO::PARAM_STR);
            $result->bindParam(':hidden', $hidden, PDO::PARAM_INT);
            $result->bindParam(':thumbCategory', $linkThumb, PDO::PARAM_STR);
            return $result->execute();
        }
    }
  /*  protected static function addThumbCategory($thumbCategory, $category_name)
    {
        $galleryPath = '/uploads/';
        $thumbCategory = $_FILES['image']['tmp_name'];
        $path =  $galleryPath . $category_name .'/'. $thumbCategory['name'];
        move_uploaded_file( $thumbCategory['tmp_name'], ROOT.$path .  $thumbCategory['name'] );

        $thumb = new Imagick();
        $thumb->readImage(ROOT.$path.$thumbCategory['name']);    $thumb->resizeImage(320, 240, Imagick::FILTER_LANCZOS,1);
        $thumb->writeImage(ROOT.$path.'thumb'.$thumbCategory['name']);

        $thumb->clear();
        $thumb->destroy();
        $linkThumb = $path.'thumb'.$thumbCategory['name'];

        $db = Db::getConnection();
        $sql = ('INSERT INTO category ( background ) '
            . 'VALUE ( :linkThumb)');
        $result = $db->prepare($sql);
        $result->bindParam(':linkFull', $linkThumb, PDO::PARAM_STR);
        $result->execute();
    }*/
}