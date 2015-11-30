<?php

class ImageView
{
    public static function viewImage()
    {
        $db = Db::getConnection();

        $sql = ('SELECT *, DATE_FORMAT(date,"%d.%m.%y") as date FROM Images');

        $result = $db->prepare($sql);

        $result->execute();
        $allImages = array();

        $i = 0;
        while ($row = $result->fetch()) {
            $allImages[$i]['id'] = $row['id'];
            $allImages[$i]['linkfull'] = $row['linkfull'];
            $allImages[$i]['linkthumb'] = $row['linkthumb'];
            $allImages[$i]['category'] = $row['category'];
            $allImages[$i]['id_user'] = $row['id_user'];
            $allImages[$i]['likes'] = $row['likes'];
            $allImages[$i]['date'] = $row['date'];
            $allImages[$i]['views'] = $row['views'];
            $i++;
        }
        return $allImages;
    }
}