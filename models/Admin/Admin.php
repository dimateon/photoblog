<?php

abstract class Admin
{
    protected static function checkAdmin() {
        if($_SESSION['admin'] = 1)
            return true;
        return false;
    }

    protected static function addCategory($category_name, $description , $hidden) {

        $db = Db::getConnection();

        $sql = 'INSERT INTO category (category_name,  description, hidden) '
            . ' VALUE (:category_name, :description , :hidden)';

        $result = $db->prepare($sql);
        $result->bindParam(':category_name', $category_name, PDO::PARAM_STR);
        $result->bindParam(':hidden', $hidden, PDO::PARAM_INT);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        return $result->execute();
    }
}