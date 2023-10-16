<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

class UserModel
{
    public function __construct()
    {
        $this->viewTable = array();
        $this->db = $GLOBALS['Database'];
    }
    public function getForm()
    {
        $buffer = "";
        
        return $buffer;
    }

    public function getData()
    {
        $db = $GLOBALS['Database'];

        // Perform query
        $query = "SELECT * FROM Pages WHERE pageId='1'";
        if ($result = $db -> executeQuery($query)) {
            
            if ($result->num_rows == 1) {
                // Loop through the result rows and access the 'content' field
                while ($row = $result->fetch_assoc()) {
                    // echo "Content: " . $row["content"] . "<br>";
                    return $row["content"];
                }
            } else {
                // echo "0 results";
                die("No results from database");
            }
            // $result -> free_result();
        }

        

        /* return $this->viewTable; */
    }
    public function login()
    {
        // get user details
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        // filter them
        if(!preg_match('/^[a-zA-Z0-9]+$/',$user))
        {
            // username no correct format
            exit();
        }
        if(!preg_match('/^[a-zA-Z0-9]+$/',$password))
        {
            // Password not corrcet format

            exit();
        }
        
        // search hash from database
        $query = "SELECT hash FROM Users WHERE usename='$user'";
        $result = $this->db->executeQuery($query);
        
        // verify password
    }
}

?>