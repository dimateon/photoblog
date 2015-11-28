<?php

require_once ROOT.'/models/Image/Image.php';

class thumbnails extends Image
{
    public function __construct($category){

        $this->categoryBihavior = new $category;
        echo "thubmnail created";

    }

    public function save()
    {


    }
}