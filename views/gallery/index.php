<?php require_once ROOT.'/templates/header.php'; ?>

<?php foreach($allCategory as $category): ?>
    <p><?php echo $category['category_name']; ?></p>
  <a href="/gallery/<?php echo $category['category_name']; ?>"><img src="<?php echo $category['thumbCategory']; ?>"></a>
<?php endforeach; ?>

<?php require_once ROOT.'/templates/footer.php'; ?>
