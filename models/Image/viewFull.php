<?php
require_once ROOT.'/models/Image/Image.php';

class viewFull
{
    public static function view($category, $id)
    {


        $db = Db::getConnection();
        $sql = ('SELECT * FROM Images '
                .' WHERE category = :category AND id = :id');
        $result = $db ->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $returnParams = Image::viewBehavior($result);

        return $returnParams;
    }
}