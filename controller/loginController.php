<?php
require_once(__DIR__ . '/../model/LoginModel.php');

class LoginController {
    private $loginModel;

    public function __construct($conn) {
        $this->loginModel = new LoginModel($conn);
    }

    public function authenticateUser($firstName, $password) {
        return $this->loginModel->authenticate($firstName, $password);
    }
}
?>
