<?php

require_once ROOT.'/models/Admin/Admin.php';
require_once ROOT.'/models/Image/getCategory.php';
class AdminController extends  Admin
{
    protected $actionIndex;
    public function actionIndex(){


            try {
                if(Admin::checkAdmin()){

                    if($_POST['submit']){

                        $category_name = $_POST['category_name'];
                        echo $category_name;
                        $thumbCategory = $_FILES['background'];
                        print_r($thumbCategory);


                        $hidden = $_POST['hidden'];
                        echo $hidden;


                        Admin::addCategory($category_name, $thumbCategory, $hidden);


                    }

                    include_once ROOT.'/views/admin/panel.php';
                    return true;

                }else  throw new Exception('Ошибка доступа');
            } catch(Exception $e) {
                echo $e->getMessage();
            }


        return true;

    }
}