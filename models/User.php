<?php


class User
{
    const SECRET = "saf121fd13xc123s";

    public static function setName($name) {
        $name = trim($name);
        if($name == '') {
            throw new Exception('Не указано имя пользователя');
        }


        return $name;
    }



    public static function setPassword($password, $secret) {
        if (strlen($password) <= 6) {
            throw new Exception('Пароль слишком короткий');

        }

        $password = md5($password.$secret);

        return $password;
    }



    public static function setEmail($email) {
        if ((filter_var($email, FILTER_VALIDATE_EMAIL) && $email != '')) {


            return $email;
        }

        throw new Exception ('Не верно указан email - адрес');

    }


    public static function WriteDb($name, $password, $email) {


        $db = Db::getConnection();
        $sql = 'INSERT INTO user (name, email, password) '
            . 'VALUE (:name, :email, :password)';

        $result =$db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();

    }

    public static function checkEmailExist($email)
    {
        $db = Db::getConnection();

        $sql ='SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            throw new Exception('Такой email уже существует');

        return true;
    }

    public static function checkUserData($email, $password) {



        $db = Db::getConnection();


        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user_date = $result->fetch();

        if(!$user_date)
            throw new Exception('Неверный email или пароль');

        return $user_date;
    }


    public static function auth($user_data){
        $_SESSION['user'] = $user_data['id'];
    }


    public static function checkLogged() {


        if (isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        header("Location: /user/login");
        return true;
    }
    public static function checkAdmin($user_date) {
        if(self::checkLogged())
             $_SESSION['admin'] = $user_date['flag'];


    }

    public static function logout() {

        unset($_SESSION['user']);
        unset($_SESSION['admin']);


    }





}



