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




    public function performCatecory()
    {
        $this->categoryBihavior->category();

    }
    public static function checkType($image) {

        $tmp = $image['tmp_name'];
        $a = getimagesize($tmp);
        $image_type = $a[2];

        if(in_array($image_type ,
            array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG , IMAGETYPE_BMP)))
        {
            return true;
        }
        return false;
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
        return false;
    }

    public function setCategoryBihavior(CategoryBihavior $category ) {

        $this->categoryBihavior = $category;

    }

    abstract public function save();



}