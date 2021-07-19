<?php
    function connectDb(){ //Connect to database function
        // Live Database
        // $servername = "svr3.educationhost.cloud";
        // $username = "cjhabnbs_sit-down";
        // $password = "Sitdown123";
        // $db = "cjhabnbs_sit-down";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "sitdown";

        $conn = mysqli_connect($servername, $username, $password, $db);

        if(!$conn){
            die ("Connection failed: ". mysqli_connect_error());
        }
        // else{
        //     echo "<br>Connect successfully<br>";
        // }
        return $conn;
    }

    function checkEmail($email) { //function to check whether the email exist in our database or not
        $conn = connectDb();
        $sql = "SELECT count(*) FROM `user` where email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);

        if($stmt->execute()) {
            $stmt->bind_result($count);
            $stmt->fetch();
            
            if($count > 0) { //count greater than 0 means that the email exist in our database
                $uniqEmail = false; //return the email is not unique or uniqEmail is false
                // echo "<span class='errorMsg'>Email Address Already Exist!</span>"; //print error message
            }
            else { //count smaller than 0 means that the email does not exist in our database
                $uniqEmail = true; //return the email is unique or uniqEmail is true
            }
        }
        else{ //if stmt can't execute
            echo "<span class='errorMsg'>".$conn->error."</span>";//error message will prompt
        }
        $stmt->close();
        $conn->close();
        return $uniqEmail;
    }

    function getDateTime(){
        date_default_timezone_set("Asia/Kuala_Lumpur"); //to set the timezone to KL
        $datetime = new DateTime(); //to get the current time
        $dt= $datetime->format('Y-m-d\TH:i:s'); //to chg the format of the datetime
        $newDateTime = date("Y-m-d H:i:s", strtotime($dt)); //to chg the datetime to string

        return $newDateTime;
    }
?>