<?php require_once ROOT.'/templates/header.php'; ?>
    <ul id="category">
<?php foreach ($returnParams as $image): ?>
        <li class="category" id="<?php echo $image['id']; ?>">
    <a href="/gallery/<?php echo $image['category']; ?>/<?php echo $image['id']; ?>"><img src="<?php echo $image['linkthumb']; ?>"></a>
            <p id="<?php echo $image['id']; ?>"><?php echo $image['views'];?></p>
            <p id="<?php echo $image['id']; ?>"><?php echo $image['likes'];?></p>
        </li>

<?php endforeach; ?>
    </ul>
<?php require_once ROOT.'/templates/header.php'; ?>