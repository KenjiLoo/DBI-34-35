<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM film_text";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>film_id</th>";
				echo "<th>title</th>";
                echo "<th>description</th>";
            echo "</tr>";
        for($x = 1; $x<=25; $x++){
            $row = mysqli_fetch_array($result);
            echo "<tr>";
                
                echo "<td>" . $row['film_id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
				echo "<td>" . $row['description'] . "</td>";
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