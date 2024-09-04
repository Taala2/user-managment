<?php
class UserController {
    private $userModel;

    public function __construct($db){
        $this->userModel = new User($db);
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if ($this->userModel->create($username, $email, $password)) {
                require '../app/views/success.php';
            }else {
                echo "Registration failed";
            }
        } else {
            require '../app/views/registrationForm.php';
        }
    }
}