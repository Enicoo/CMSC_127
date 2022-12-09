<?php
include 'connect.php'
?>

<html>

<div class="search-result">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM personaldata2,coursedata,resourcedata,borrowerrecords WHERE personaldata2.p_name LIKE '%$search%'";
            
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            echo "There are " .$queryResult. " result(s)! <br><br>"; 

            if ($queryResult > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['p_ID' ];
                }
            } else {
                echo "There are no results :/";
            }
            
            
        }
        echo "<h2>fuck</h2>"
    ?>
    
</div>
 

</html>