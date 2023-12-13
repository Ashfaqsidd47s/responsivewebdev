<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ashfaq";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    function validateEmail($data){
        return !($data == "");
    }

    if($_SERVER["REQUEST_METHOD" == "POST"]){
        $email = $_POST["email"];
        $password = $_POST["password"];
    }




?>