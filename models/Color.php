<?php
class Color{
    public $color_name;

    public function __construct ($color_name)
    {
        $this->color_name = $color_name; 

    }
    public static function getAll()
    {   
        $ColorList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `color`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $color_name = $my_row[color_name]; 

            $ColorList[] = new Color($color_name);
        }
        require("connection_close.php");
        
        return $ColorList;
    }
}
?>