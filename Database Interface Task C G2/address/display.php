<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM  `address`";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>address_id</th>";
                echo "<th>address</th>";
                echo "<th>address2</th>";
                echo "<th>district</th>";
                echo "<th>city_id</th>";
                echo "<th>postal_code</th>";
                echo "<th>phone</th>";
                echo "<th>last_update</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['address_id'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['address2'] . "</td>";
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['city_id'] . "</td>";
                echo "<td>" . $row['postal_code'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
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