<?php
// TODO make this usefull
// Not complete - usefull yet... 
class Database
{
    protected $mysqli;
    protected $stmt;

    public function __construct()
    {
        $this->mysqli = new mysqli("localhost","my_user","my_password","my_db");

        // Check connection
        if ($this->mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli -> connect_error;
            exit();
        }
    }

    public function setQuery(string $query)
    {
        if(!$this->stmt = mysqli_prepare($this->mysql, $query))
        {
            echo "Statement prepare error.";
            exit;
        }
        
    }
    public function setBind($param)
    {
        if(is_array($param))
        {
            foreach ($param as $key => $value) {
                # code...
                // bind line
            }
        } else {

        }
    }

    public function getResults()
    {
        $this->stmt -> execute();
        $result = $this->stmt->get_result();
        /* associative array */
        $row = $result->fetch_array(MYSQLI_ASSOC);
        printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
    }
}
?>