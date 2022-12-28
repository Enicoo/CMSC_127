<?php
    include 'connect.php';
        if (isset($_POST['submit'])) {
        $studentid =  $_POST['studentid'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $bday = $_POST['bday'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];
        $usergroup = $_POST['usergroup'];
        $email = $_POST['email'];
        $book = $_POST['book'];

        $sql = "INSERT INTO `personaldata` (`p_ID`, `p_name`, `c_ID`, `p_birthday`, `p_contact`, `p_gender`, `p_email`, `p_usergroup`)
        
        VALUES ('$studentid', '$name' , '$course', '$bday', '$number', '$gender', '$email', '$usergroup')";

        $result = mysqli_query($conn,$sql);
        if($result) {
            $conn->close(); 
            header("location:../db/demo.php");
        }
        else { 
            die(mysqli_error($conn));
        }  
    }
?>
