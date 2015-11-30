<?php


class FullController
{
    public function actionIndex()
    {
        $p = "<img src='../test/2.jpg'>";

        include_once ROOT . "/views/test/test.php";
        return true;
    }
}