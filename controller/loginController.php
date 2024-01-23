<?php
require_once(__DIR__ . '/../model/LoginModel.php');

class LoginController {
    private $loginModel;
    public function __construct($conn) {
        $this->loginModel = new LoginModel($conn);
    }
    public function authenticateUser($firstName, $password) {    
        $userDetails = $this->loginModel->authenticate($firstName, $password);
        if ($userDetails) {           
           session_start();          
            $_SESSION['user_details'] = array(
                'firstName' => $userDetails['firstName'],
                'lastName' => $userDetails['lastName'],
                'email' => $userDetails['email'],
                'password' => $userDetails['password'],
                'gender' => $userDetails['gender'],
                'hobbies' => $userDetails['hobbies'],
                'department' => $userDetails['department'],               
            );           
            return true; 
        }
        return false; 
    }
}
?>
