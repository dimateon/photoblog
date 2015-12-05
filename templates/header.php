<!DOCTYPE html>
<html>
<head>
    <title>Photo Blog</title>
    <meta charset="UTF-8">
    <script src="/templates/scripts/jquery-2.1.4.js"></script>

    <script src="/templates/test/js/bootstrap.js" type="text/javascript"></script>
    <link href="/templates/css/reset.css" rel="stylesheet">
    <link href="/templates/css/main.css" rel="stylesheet">

</head>
<body>
<div class="page_align">
    <div class="header">
        <a href="#" id="qwerty"></a>
        <div class="nav_bar">
            <ul><!--
                 --><li><a href="/">Home</a></li><!--
                 --><li><a href="/gallery">Gallery</a></li><!--
                 --><li><a href="#">About</a></li><!--
                 --><?php echo User::changeNav(); ?>
                    <div id="login_form">
                        <form method="post" action="/login">
                            <input id="user_name" type="text" placeholder="Login" name="email">
                            <input id="user_password" type="password" placeholder="Password" name="password">
                            <a href="#" id="to_reg">Registration</a>
                            <input type="submit" id="log_in" name="submit" value="Sign in" />
                        </form>
                    </div>
                    <div id="reg_form">
                        <form method="post" action="/register">
                            <input id="user_name" type="text" name="name" placeholder="Login">
                            <input id="user_password" type="email" name="email" placeholder="@mail">
                            <input id="user_password" type="password" name="password" placeholder="Password">
                            <input type="submit" name="submit" class="" value="Sign up"/>
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="content">
