<html>
<head>
    <link href="templates/css/main.css" rel="stylesheet">
</head>
<body>
<a href="#" class="full" id="full_size" data-id="1">full</a>
</body>
<script src="/templates/jquery-2.1.4.js"></script>
<script>
    $(document).ready(function(){
        $('.full').click(function(){

            $.post("/full", {}, function (data) {
                $("#full_size").html(data);
            });
        });
    });
</script>
</html>