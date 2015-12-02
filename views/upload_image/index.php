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
        <form method="post" >

            <input type="text" name="directory_name">
            <input type="submit" name="create" value ="create directory">

        </form>


    </form>
</div>
</body>


</html>