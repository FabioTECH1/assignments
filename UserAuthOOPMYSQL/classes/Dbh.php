<?php

class Dbh
{
    //set your configs here
    private $host = "127.0.0.1";
    private $user = "root";
    private $dbname = "zuriphp";
    private $password = "";

    protected function connect()
    {
        $conne = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
        if (!$conne) {
            echo "<script> alert('Error connecting to the database') </script>";
        }
        return $conne;
    }
}