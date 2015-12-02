<?php

require_once ROOT.'/models/Admin/Admin.php';

class AdminController extends  Admin
{
    protected $actionIndex;
    public function actionIndex(){


            try {
                if(Admin::checkAdmin()){

                    if($_POST['submit']){

                        $category_name = $_POST['category_name'];
                        echo $category_name;
                        $description = $_POST['description'];
                        echo $description;

                        $hidden = $_POST['hidden'];
                        echo $hidden;

                        Admin::addCategory($category_name, $description, $hidden);
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