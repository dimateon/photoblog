<?php
require_once ROOT.'/models/Image/categoryBehavior.php';
require_once ROOT.'/models/Image/viewFull.php';
require_once ROOT.'/models/Counter.php';

class ViewController
{
    protected $actionIndex;
    public function actionIndex($category, $id)
    {
       /* $returnParams = array();
        $returnParams = viewFull::view($category, $id);*/
        $counter = Counter::addCount($id);
        Counter::showCounter($id);
        $counter = Counter::showCounter($id);
        $counter = $counter['views'];




        echo $counter;



        return true;
    }
}