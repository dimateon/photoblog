<?php
require_once ROOT. '/models/Image/imageBehavior.php';
require_once ROOT.'/models/Image/Image.php';

class viewThumbs
{
    public static function view($id)
    {
        $category = strval($id);

        $db = Db::getConnection();
        $sql = 'SELECT * FROM Images '
            . 'WHERE category = :category';
        $result = $db->prepare($sql);

        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->execute();
        $returnParams = Image::viewBehavior($result);

        return $returnParams;

    }
}