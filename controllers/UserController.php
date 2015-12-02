<?php
require_once(ROOT.'/models/User.php');

class UserController extends User
{
    protected $actionRegister;
    protected $actionLogin;
    protected $actionLogout;


    public function actionRegister(){
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];



            try {
                $email = User::setEmail($email);
                $password =User::setPassword($password, parent::SECRET);
                $name = User::setName($name);
                if(User::checkEmailExist($email))
                    User::WriteDb($name, $password, $email);

                header("Location:/");


            } catch (Exception $e) {
                echo "Ошибка присвоения данных:" . $e->getMessage();
            }

        }
        require_once(ROOT. '/views/user/register.php');
        return true;
    }




    public function actionLogin()
    {

        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            try {
                $email = User::setEmail($email);

                if(User::setPassword($password, parent::SECRET))
                    $password =User::setPassword($password, parent::SECRET) ;

                $user_data = User::checkUserData($email, $password);

                User::auth($user_data);
                User::checkAdmin($user_data);

                header('Location:/');


            } catch (Exception $e) {

                echo  $e->getMessage();
            }




        }
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    public function actionLogout() {

        User::logout();
        header("Location:/");
    }




}