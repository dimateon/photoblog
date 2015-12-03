<?php require_once ROOT.'/templates/header.php'; ?>
<?php foreach ($returnParams as $image): ?>

    <div><img src="<?php echo $image['linkfull']; ?>"</div>

    <?php endforeach; ?>

<?php require_once ROOT.'/templates/header.php'; ?>