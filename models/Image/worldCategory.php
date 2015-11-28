<?php
require_once ROOT.'/models/Image/categoryBihavior.php';

class worldCategory implements categoryBihavior
{
    public function category()
    {
        echo "World Category";
    }
}