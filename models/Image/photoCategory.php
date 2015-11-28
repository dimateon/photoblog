<?php

require_once ROOT.'/models/Image/categoryBihavior.php';

class photoCategory implements categoryBihavior
{
    public function category()
    {
       echo "Photo Category";
    }
}