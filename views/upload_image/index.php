<?php require_once ROOT.'/templates/header.php'; ?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">


        <br>
        <select  name="category">
            <option value="">--Please Select--</option>
            <?php foreach($allCategory as $category): ?>
                <option value="<?php echo $category['category_name']; ?>"><?php echo $category['category_name']; ?></option>
                <?php echo $category['category_name']; ?>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" value="Загрузить">
        <form method="post" >

            <input type="text" name="directory_name">
            <input type="submit" name="create" value ="create directory">

        </form>


    </form>
<?php require_once ROOT.'/templates/footer.php'; ?>
