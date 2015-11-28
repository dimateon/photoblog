<?php

require_once ROOT.'/models/Image/Image.php';

class fullSize extends Image
{

    public function __construct($category){

        $this->categoryBihavior = new $category;
        echo "fullSize created";

    }
    public function save(){


    }
}