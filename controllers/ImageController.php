<?php
require_once ROOT.'/models/Image/Image.php';
require_once ROOT.'/models/Image/getCategory.php';
require_once ROOT . '/models/Image/categoryBehavior.php';
require_once ROOT.'/models/Image/fullSize.php';

class ImageController
{
    protected $actionIndex;
    static public function actionIndex()
    {

        if(isset($_POST['submit']) && isset($_FILES['image'])) {
            $image =  $_FILES['image'];
            print_r($_FILES['image']);
            if($image['error'] > 0) {
                echo "Вы не выбрали файл";
                exit();

            }



            $user_id = $_SESSION['user'];
            if(isset($_POST['category'])) {

                $category = $_POST['category'];
            } else { echo "Категорий не выбрана"; exit();}





        try {
            Image::checkType($image);
            Image::checkSize($image);
            Image::checkImageResolution($image);

            $path = Image::prepareSave($user_id, $category);


            $full = new fullSize($category);
            echo "<br />";
            $full->save($path, $image);
            echo "<br />";
        } catch (Exception $e) {
            echo $e->getMessage();
        }

         /*
            try {
                if(!Image::checkType($image))
                throw new Exception("Файл не соответсвует!");
            } catch(Exception $e) {
                echo $e->getMessage();
                exit();
            }
            try {
                if(!Image::checkSize($image))
                throw new Exception('Файл слишком большой');

            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }


            try {
                if(!Image::checkImageResolution($image))
                throw new Exception('Разрешение не соответсвует!');

            }catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }


            $full = new fullSize($category);
            echo "<br />";
            $full->performCategory();
            echo "<br />";
            $full->save($path, $image);
            echo "<br />";
         */

        }


        $allCategory = array();
        $allCategory = getCategory::category();
        include_once ROOT."/views/upload_image/index.php";
        return true;
    }


    public function actionView()
    {


    }
}

