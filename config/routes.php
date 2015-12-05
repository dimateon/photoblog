<?php
return array(

    'admin' => 'admin/index',
    'logout' => 'user/logout',
    'login'  => 'user/login',
    'register' => 'user/register',


    'gallery/([a-z]+)/([0-9]+)' => 'view/index/$1/$2',
    'gallery/([a-z]+)' => 'thumb/index/$1',
    'gallery' => 'category/index',
    'view'   => 'view/index',

     'upload' => "image/index",

    '' => 'main/index',

);