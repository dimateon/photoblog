<?php
require_once ROOT.'/models/Image/getCategory.php';
require_once ROOT . '/models/Image/categoryBehavior.php';
class CategoryController
{
    protected $actionIndex;

    public function actionIndex()
    {
        $allCategory = array();
        $allCategory = getCategory::category();

        require_once ROOT . '/views/gallery/index.php';
        return true;
    }
}