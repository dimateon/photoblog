<?php require_once ROOT.'/templates/header.php'; ?>


<form method="post"  enctype="multipart/form-data">
    <p>Category_name</p>
    <input type="text" name="category_name">
    <p>Description</p>
    <input type="file" name="background">
    <p><input type="radio" name="hidden" value="1">hide</p>
    <p><input type="radio" name="hidden" value="0">show</p>
    <input type="submit" name="submit">
</form>


<?php require_once ROOT.'/templates/footer.php'; ?>
