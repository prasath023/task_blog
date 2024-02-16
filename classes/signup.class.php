
<?php

class Signup extends Dbh {

    protected function setUser($name, $password, $email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $conn = $this->connect();
        $name = "'" . $name . "'";
        $email = "'" . $email . "'";
        $hashedPassword = "'" . $hashedPassword . "'";
        $sql = "INSERT INTO users (full_name, email, password) VALUES ($name,$email, $hashedPassword)";
        
        if ($conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    

    protected function checkUser($name, $email) {

        $conn = $this->connect();
        $sql = "SELECT * FROM users WHERE full_name=? OR email = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name,$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }    
    }
    
   
}