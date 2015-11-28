<?php

class ValidImage
{
    public static function checkFileType($image)
    {
        $tmp = $image['tmp_name'];
        $a = getimagesize($tmp);
        $image_type = $a[2];
        print_r($a);


        if(in_array($image_type ,
            array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG , IMAGETYPE_BMP)))
        {
            return true;
        }
        return false;


    }

    public static function checkFileSize($image)
    {
        $size = $image['size'];

        if($size > 2000000) {
            return false;
        }
        return true;

    }

    public static function checkFileImageSize($image)
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
        return false;

    }

}