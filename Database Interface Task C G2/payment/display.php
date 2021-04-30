<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM payment";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>payment_id</th>";
                echo "<th>customer_id</th>";
                echo "<th>staff_id</th>";
                echo "<th>amount</th>";
                echo "<th>payment_date</th>";
                echo "<th>last_update</th>";
                echo "<th>rental_id</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['payment_id'] . "</td>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['staff_id'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['payment_date'] . "</td>";
                echo "<td>" . $row['last_update'] . "</td>";
                echo "<td>" . $row['rental_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>