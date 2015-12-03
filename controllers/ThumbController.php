<?php

require_once ROOT. '/models/Image/viewThumbs.php';

class ThumbController
{
    protected $actionIndex;
    public function actionIndex($id){

        $returnParams = array();
        $returnParams = viewThumbs::view($id);


        include_once ROOT.'/views/gallery/thumbs.php';
        return true;
    }
}