<?php


class FullController
{
    public function actionIndex()
    {
        $p = "<img src='../test/1.jpg'>";

        include_once ROOT . "/views/test/test.php";
        return true;
    }
}