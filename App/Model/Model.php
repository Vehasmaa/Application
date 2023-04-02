<?php
class Model
{
    public function __construct()
    {
        $this->viewTable = array();

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

}

?>