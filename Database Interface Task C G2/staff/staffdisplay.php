<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM staff";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>staff_id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>address_id</th>";
                echo "<th>picture</th>";
                echo "<th>email</th>";
                echo "<th>store_id</th>";
                echo "<th>active</th>";
                echo "<th>username</th>";
                echo "<th>password</th>";
                echo "<th>last_update</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['staff_id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['address_id'] . "</td>";
                echo "<td><img src='data:image;base64,".base64_encode($row['image'])."' alt='null'/></td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['store_id'] . "</td>";
                echo "<td>" . $row['active'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
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