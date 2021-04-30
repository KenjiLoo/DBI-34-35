<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM film";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>film_id</th>";
                echo "<th>title</th>";
                echo "<th>description</th>";
                echo "<th>release_year</th>";
                echo "<th>language_id</th>";
                echo "<th>orignial_language_id</th>";
                echo "<th>rental_duration</th>";
                echo "<th>rental_rate</th>";
                echo "<th>length</th>";
                echo "<th>replacement_cost</th>";
                echo "<th>rating</th>";
                echo "<th>special_features</th>";
                 
                echo "<th>last_update</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['film_id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['release_year'] . "</td>";
                echo "<td>" . $row['language_id'] . "</td>";
                echo "<td>" . $row['orignial_language_id'] . "</td>";
                echo "<td>" . $row['rental_duration'] . "</td>";
                echo "<td>" . $row['rental_rate'] . "</td>";
                echo "<td>" . $row['length'] . "</td>";
                echo "<td>" . $row['replacement_cost'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "<td>" . $row['special_features'] . "</td>";
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