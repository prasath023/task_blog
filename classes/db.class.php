

<?php



class Dbh {
   
    private $servername = "localhost";
    private $username = "root";
    private $password = "Krds@123";
    private $dbname = "blogs";

    protected function connect() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    public function isConnectionEstablished(){
        if($this->connect()){
            return true;
        }else{
            return false;
        }
    }

}