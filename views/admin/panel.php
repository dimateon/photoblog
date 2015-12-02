<?php require_once ROOT.'/templates/header.php'; ?>


<form method="post">
    <p>Category_name</p>
    <input type="text" name="category_name">
    <p>Description</p>
    <input type="text" name="description">
    <p><input type="radio" name="hidden" value="1">hide</p>
    <p><input type="radio" name="hidden" value="0">show</p>
    <input type="submit" name="submit">
</form>


<?php require_once ROOT.'/templates/footer.php'; ?>
