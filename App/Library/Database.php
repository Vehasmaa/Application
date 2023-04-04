<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

// TODO make this usefull
// Not complete - usefull yet... 
class Database
{
    private $mysqli;

    public function __construct()
    {
        $server = "localhost";
        $user = "testuser";
        $password = "testtest";
        $database = "mvc";
    
        $this->mysqli = new mysqli($server, $user, $password, $database);

        // Check connection
        if ($this->mysqli -> connect_errno) {
            die("Failed to connect to MySQL: " . $this->mysqli -> connect_error);
        }
    }

    public function __destruct()
    {
        mysqli_close($this->mysqli);
    }

    public function executeQuery($query)
    {
        $result = $this->mysqli->query($query);

        return $result;
    }
}
?>