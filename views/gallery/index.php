<?php require_once ROOT.'/templates/header.php'; ?>

<?php foreach($allCategory as $category): ?>
    <p><?php echo $category['category_name']; ?></p>
  <img src="<?php echo $category['thumbCategory']; ?>">
<?php endforeach; ?>

<?php require_once ROOT.'/templates/footer.php'; ?>
