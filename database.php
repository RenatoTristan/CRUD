<?php
class Database{
private $con;
private $dbhost = "localhost";
private $dbuser = "root";
private $dbpass="";
private $dbname="crud";
function __construct(){
$this-> connect_db();
}

public function connect_db(){
    $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if(mysqli_connect_error()){
die("conexion a la base de datos fallo" . mysqli_connect_error() . mysqli_connect_errno());
    }
}



}




?>