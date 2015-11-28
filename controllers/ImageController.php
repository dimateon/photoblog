<?php
require_once ROOT.'/models/Image/Image.php';
require_once ROOT.'/models/Image/thumbnails.php';
require_once ROOT.'/models/Image/categoryBihavior.php';
require_once ROOT.'/models/Image/fullSize.php';
require_once ROOT.'/models/Image/photoCategory.php';
require_once ROOT.'/models/Image/worldCategory.php';
class ImageController
{
    static public function actionIndex()
    {

        if(isset($_POST['submit']) && isset($_FILES['image'])) {
            $image = $_FILES['image'];

            $category = $_POST['category'];


            if(Image::checkType($image))
            {

            } else
            {
                echo "Файл не соответсвует!<br />";
            }

            if(Image::checkSize($image))
            {


            } else {
                echo "Файл слишком большой<br />";

            }
            if(Image::checkImageResolution($image)) {

            } else {
                echo "Разрешение - false";
            }

            $thumb = new thumbnails($category);
            echo "<br />";
            $thumb->performCatecory();
            echo "<br />";
            $thumb->save();
            echo "<br />";


            $full = new fullSize($category);
            echo "<br />";
            $full->performCatecory();
            echo "<br />";
            $full->save();
            echo "<br />";



        }



        include_once ROOT."/views/upload_image/index.php";
        return true;
    }
}

