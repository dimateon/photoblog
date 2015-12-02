<?php require_once ROOT.'/templates/header.php'; ?>

<div class="slider">
    <!--  <div class="slider_nav"> -->

    <!--    </div> -->
    <img  id="slider" src="../../templates/images/slider_one.png">
    <ul class="myList" style = "border:  1px solid black">
    </ul>
    <a href="#" class="prev">prev</a>
    <a href="#" class="next">next</a>
</div>
<div class="some_text">
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</h1>
</div>
<div id="go_gallery">
    <a href="#">Go to GALLERY</a><p><?php echo $_SESSION['user']; ?></p>
</div>
<?php require_once ROOT.'/templates/footer.php'; ?>
