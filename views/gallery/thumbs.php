<?php require_once ROOT.'/templates/header.php'; ?>

<ul id="category">
<?php foreach ($returnParams as $image): ?>
    <li class="category" id="<?php echo $image['id']; ?>">
    <a href="#modal" role="button" class="btn" data-toggle="modal" data-id="<?php echo $image['id']; ?>">
    <img id='wer' src="<?php echo $image['linkthumb']; ?>"></a>
    <div class="photo_info">
    	<img src="/templates/images/prosmotr.png" id="like_png"><p id="likes">47</p>
    	<img src="/templates/images/like.png" id="view_png"><p id="views">71</p>
    </div>
    </li>
<?php endforeach; ?>
</ul>


<?php require_once ROOT.'/templates/footer.php'; ?>


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

