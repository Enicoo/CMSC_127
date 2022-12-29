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
        $date = date('y-m-d');

        $sql = "INSERT INTO `personaldata` (`p_ID`, `p_name`, `c_ID`, `p_birthday`, `p_contact`, `p_gender`, `p_email`, `p_usergroup`)
        VALUES ('$studentid', '$name' , '$course', '$bday', '$number', '$gender', '$email', '$usergroup')";

        $sql1 = "INSERT INTO `borrowerrecords` (`b_ID`, `p_ID`, `r_ID`, `r_releaseDate`, `r_returnDate`, `r_returnedDate`, `r_daysOfPenalty`, `r_description`) 
        VALUES (NULL, '$studentid', '$book', '$date', '', '', '', '')";

        $result = mysqli_query($conn,$sql);
        $result1 = mysqli_query($conn,$sql1);
            
        if($result && $result1) {
            $conn->close(); 
            header("location:../db/thankyou.php");
        }
        else { 
            die(mysqli_error($conn));
        }  
    }
?>
