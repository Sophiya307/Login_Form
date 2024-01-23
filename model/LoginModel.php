<?php
class LoginModel {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function authenticate($firstName, $password) {
        $result = $this->conn->query("SELECT * FROM employee_data WHERE firstName = '$firstName' AND password = '$password'");
        if ($result === false) {
            die("Database error: " . $this->conn->error);
        }
        if ($result->num_rows > 0) {
           
            $userDetails = $result->fetch_assoc();
            return $userDetails;
        } else {
            return false;
        }
    }
}
?>
