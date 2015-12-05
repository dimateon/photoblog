<?php require_once ROOT.'/templates/header.php'; ?>
    <ul id="category">
        <?php foreach($allCategory as $category): ?>
            <li class="category" id="<?php echo $category['id']; ?>">
                <p><?php echo $category['category_name']; ?></p>
                <a href="/gallery/<?php echo $category['category_name']; ?>"><img src="<?php echo $category['thumbCategory']; ?>"></a>
            </li>
        <?php endforeach; ?>
    </ul>


<?php require_once ROOT.'/templates/footer.php'; ?>