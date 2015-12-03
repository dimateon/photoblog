<html>
<head>

</head>
<body>
<?php foreach($returnParams as $images): ?>
<p><img src="<?php echo $images['linkfull'] ; ?>" id="<?php echo $images['id']; ?>"></p>
<p><?php echo $images['date'] ; ?></p>

<p><?php echo $images['likes'] ; ?></p>
<p><?php echo $images['views'] ; ?></p>
<p><?php echo  $images['category']; ?></p>
<?php endforeach; ?>
</body>
</html>