<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM rental";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>rental_id</th>";
                echo "<th>rental_date</th>";
                echo "<th>inventory_id</th>";
                echo "<th>customer_id</th>";
                echo "<th>return_date</th>";
                echo "<th>staff_id</th>";
                echo "<th>last_update</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['rental_id'] . "</td>";
                echo "<td>" . $row['rental_date'] . "</td>";
                echo "<td>" . $row['inventory_id'] . "</td>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['return_date'] . "</td>";
                echo "<td>" . $row['staff_id'] . "</td>";
                echo "<td>" . $row['last_update'] . "</td>";
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