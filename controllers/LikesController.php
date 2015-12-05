<?php
require_once ROOT.'/models/Likes.php';
class LikesController
{
    protected $actionAdd;
    public function actionAdd($id)
    {



        Likes::AddLikes($id);
        $likes = Likes::showLike($id);
        $like = $likes['likes'];
        echo $like;


        return true;
    }

}