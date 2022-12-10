<?php
include 'connect.php'
?>

<html>

<div class="search-result">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT personaldata.p_name, c_course, r_title, r_releaseDate FROM borrowerrecords INNER JOIN personaldata ON borrowerrecords.p_ID = personaldata.p_ID INNER JOIN coursedata ON personaldata.c_ID = coursedata.c_ID INNER JOIN resourcedata ON resourcedata.r_ID = borrowerrecords.r_ID WHERE personaldata.p_name LIKE '%$search%'";
            
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            echo "There are " .$queryResult. " result(s)! <br><br>"; 

            
            if ($queryResult > 0) {
                echo "<table border=1><tr>
                <th>Personal ID</th>
                <th>Name</th>
                <th>Book</th>
                <th>Date of Release</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . 
                    $row['p_name']. "</td><td>" . 
                    $row['c_course']. "</td><td>" . 
                    $row['r_title']. "</td><td>" . 
                    $row['r_releaseDate']. "</td></tr>";
                }
                echo "</table>";
            }else {
                echo "There are no results :/";
            }
            
            
            
        }
        echo "<h2>fuck ye</h2>"
    ?>
    
</div>
 

</html>