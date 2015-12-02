<?php

/**
 * Created by PhpStorm.
 * User: sett
 * Date: 27.11.15
 * Time: 21:50
 */
abstract class Image
{

    protected $categoryBihavior;
    protected $tmp;
    protected $imageSize;
    protected $image;
    protected $image_type;





    public static function checkType($image) {

        $tmp = $image['tmp_name'];
        $a = getimagesize($tmp);
        $image_type = $a[2];

        if(in_array($image_type ,
            array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG , IMAGETYPE_BMP)))
        {
            return true;
        }
        throw new Exception("Неверный тип файла");
    }

    public static function checkSize($image)
    {
        $size = $image['size'];

        if($size > 2000000) {
            return false;
        }
        return true;
    }

    public static function checkImageResolution($image)
    {
        $path = $image['tmp_name'];
        $ImageSize = getimagesize($path);
        $width = $ImageSize[0];
        $height = $ImageSize[1];
        $imagesize = array();
        $imagesize[0] = $width;
        $imagesize[1] = $height;

        if($imagesize[0] > 1000 && $imagesize > 600){
            return true;
        }
        throw new Exception("Слишком низкое разрешение изображения");
    }


    public static function checkDirectory() {
        if($_POST['directory_name'] != '') {
            $directory = $_POST['directory_name'];
            return $directory;
        } else
            throw new Exception('Директория не выбрана');
    }

    public static function prepareSave($user_id, $category, $directory) {

        $galleryPath = '/uploads/';
        $photo_save = $_FILES['image']['tmp_name'];
        $name = md5($photo_save);
        $dir = substr(md5(microtime()), mt_rand(0, 30), 2) . '/' . substr(md5(microtime()), mt_rand(0, 30), 2);
        $folder_path = ROOT . $galleryPath . $user_id . '/' . $category . '/' . $dir ;
        if (!is_dir($folder_path)){
        mkdir($folder_path, 0777, true);
        }
        $path =  $galleryPath . $user_id . '/' . $category . '/' . $dir ;


        return $path;

    }

    abstract public function save($path, $image);



}