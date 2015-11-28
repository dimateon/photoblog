<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <p><?php echo $p; ?></p>
</div>
<script>
$(document).ready(function(){
$('.like').click(function(){
var id = $(this).attr('data-id');
$.post("/likes/add/"+id, {}, function (data) {
$("#res_"+id).html(data);
});

});
});
</script>
</body>
</html>