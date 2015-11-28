<html>
<head>
</head>
<body>
<div>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <select id="qwerty" name="category">
            <option value="">--Please Select--</option>
            <option value="photoCategory">photo</option>
            <option value="worldCategory">wordl</option>
        </select>
        <input type="submit" name="submit" value="Загрузить">
        <a href="#" class="full" id="full_size" data-id="1">full</a>
    </form>
</div>
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