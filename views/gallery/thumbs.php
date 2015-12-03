<?php require_once ROOT.'/templates/header.php'; ?>

<?php foreach ($returnParams as $image): ?>

    <div><a href="/gallery/<?php echo $image['category']; ?>/<?php echo $image['id']; ?>"><img src="<?php echo $image['linkthumb']; ?>"</a></div>

<?php endforeach; ?>
<?php require_once ROOT.'/templates/header.php'; ?>