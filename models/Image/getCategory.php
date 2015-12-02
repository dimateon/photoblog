<?php
require_once ROOT.'/models/Image/categoryBehavior.php';

class getCategory implements  categoryBehavior
{
    public static function category(){

        $db = Db::getConnection();

        $sql = 'SELECT category_name, thumbCategory FROM category '
                .'ORDER BY category_name';

        $result = $db->prepare($sql);
        $result->execute();

        $allCategory = array();

        $i = 0;
        while ($row = $result->fetch()) {
            $allCategory[$i]['category_name'] = $row['category_name'];
            $allCategory[$i]['thumbCategory'] = $row['thumbCategory'];
            $i++;
        }
        return $allCategory;

    }
}