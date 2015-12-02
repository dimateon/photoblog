<html>
<head>

</head>
<body>
<?php foreach($allImages as $images): ?>
<p><img src="<?php echo $images['linkfull'] ; ?>" id="<?php echo $images['id']; ?>"></p>
<p><?php echo $images['date'] ; ?></p>
    <p><img src="<?php echo $images['linkthumb'] ; ?>"></p>
<p><?php echo $images['likes'] ; ?></p>
<p><?php echo $images['views'] ; ?></p>
<p><?php echo  $images['category']; ?></p>
<?php endforeach; ?>
</body>
</html>