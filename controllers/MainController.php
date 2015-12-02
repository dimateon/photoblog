<?php

class MainController
{
    protected $actionIndex;
    public function actionIndex()
    {
        if(isset($_POST['create'] )) {

            print_r($_POST);
            $user_directory = $_POST['directory_name'];
            echo $user_directory;

        }

        require_once ROOT.'/views/main/index.php';
        return true;
    }
}