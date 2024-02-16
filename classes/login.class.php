<?php
session_start();

class Login extends Dbh{



    public function getUser($email,$password){
        $email="'".$email."'";
        $sql = "SELECT * FROM users WHERE email=$email";
        $res = $this->connect()->query($sql);

        if($res && $res->num_rows) {

            $user = $res->fetch_assoc();

            if(password_verify($password, $user["password"])) {
                $_SESSION["user_names"] = "hi";
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_name"] = $user["full_name"];

                echo "Login successful!";
            } else {
                echo "Invalid password!";
            }
        } else {
            echo 'User not found';
        }
    
    }
}
?>