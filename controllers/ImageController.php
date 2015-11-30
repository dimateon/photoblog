<?php
require_once ROOT.'/models/Image/Image.php';

require_once ROOT.'/models/Image/categoryBihavior.php';
require_once ROOT.'/models/Image/fullSize.php';
require_once ROOT.'/models/Image/photoCategory.php';
require_once ROOT.'/models/Image/worldCategory.php';
class ImageController
{
    static public function actionIndex()
    {

        if(isset($_POST['submit']) && isset($_FILES['image'])) {
            $image =  $_FILES['image'];
            print_r($_FILES['image']);
            if($image['error'] > 0) {
                echo "Вы не выбрали файл";
                exit();

            }



            $user_id = "sett";

            $category = $_POST['category'];

            $path = Image::prepareSave($user_id, $category);




            if(Image::checkType($image))
            {

            } else
            {
                echo "Файл не соответсвует!<br />";

            }
            /*try {
                Image::checkType($image);
                throw new Exception("Файл не соответсвует!");
            } catch(Exception $e) {
                echo $e->getMessage();
            }
            try {
                Image::checkSize($image);
                throw new Exception('Файл слишком большой');

            } catch (Exception $e) {
                echo $e->getMessage();
            }*/

            if(Image::checkSize($image))
            {


            } else {
                echo "Файл слишком большой<br />";


            }

            if(Image::checkImageResolution($image)) {

            } else {
                echo "Разрешение - false";
            }

           /* try {
                Image::checkImageResolution($image);
                throw new Exception('Разрешение не соответсвует!');

            }catch (Exception $e) {
                echo $e->getMessage();
            }*/




            $full = new fullSize($category);
            echo "<br />";
            $full->performCategory();
            echo "<br />";
            $full->save($path, $image);
            echo "<br />";
            /*$thumb = new thumbnails($category);
            echo "<br />";
            $thumb->performCategory();
            echo "<br />";
            $thumb->save($path, $image);
            echo "<br />";*/



        }



        include_once ROOT."/views/upload_image/index.php";
        return true;
    }


    public function actionView()
    {


    }
}

