<?php
    function connectDb(){ //Connect to database function
        $servername = "svr3.educationhost.cloud";
        $username = "cjhabnbs_sit-down";
        $password = "Sitdown123";
        $db = "cjhabnbs_sit-down";

        $conn = mysqli_connect($servername, $username, $password, $db);

        if(!$conn){
            die ("Connection failed: ". mysqli_connect_error());
        }else{
            echo "<br>Connect successfully<br>";
        }
        return $conn;
    }

    function register($name, $email, $phoneNum, $password){
        $userId = MD5(microtime());
    }
?>