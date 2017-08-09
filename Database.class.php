<?php
class Database {
    private $host = "";
    private $username = "";
    private $password = "";
    private $db_name = "";

    function __construct($host,$username,$password,$db_name) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }

    function insert($data){
        $con = mysqli_connect($this->host , $this->username , $this->password , $this->db_name);
        mysqli_set_charset($con,"utf8");
        $sql_i = "UPDATE display_data SET d_temp = '".$data["temp"]."', d_humi = '".$data["humi"]."'";
        $sql_u = "INSERT INTO log_datas(temp,humi,time) VALUES ('".$data["temp"]."', '".$data["humi"]."', '".time()."')";
        $save_i = mysqli_query($con, $sql_i);
        $save_u = mysqli_query($con, $sql_u);
        $con->close();
        if ($save_i and $save_u) {
            return true;
        }else{
            return false;
        }
        
    }

}

?>