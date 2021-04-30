<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shengjun_demo","nottingham123","shengjun_taskC");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$action = $_POST['action'];
if ($action == "select"){
    // Attempt select query execution
    $film_id = $_POST['film_idsel'];
    $title =  strtoupper($_POST['titlesel']);
    $description = ucwords($_POST['descriptionsel']);
    $release_year = $_POST['release_yearsel'];
    $language_id = $_POST['language_idsel'];
    $original_language_id =  $_POST['original_language_idsel'];
    $rental_duration = $_POST['rental_durationsel'];
    $rental_rate = $_POST['rental_ratesel'];
    $length = $_POST['lengthsel'];
    $replacement_cost = $_POST['replacement_costsel'];
    $rating = strtoupper($_POST['ratingsel']);
    $special_features = ucwords($_POST['special_featuressel']);
    
    $sql = "SELECT * FROM film WHERE film_id = '$film_id' || title = '$title' || description = '$description' || release_year = '$release_year' || language_id = '$language_id' || rental_duration = '$rental_duration'|| rental_rate = '$rental_rate' || length = '$length' || replacement_cost = '$replacement_cost' || rating = '$rating' || special_features = '$special_features'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
            echo "<table class='table table-striped'>";
                echo "<tr>";
                    echo "<th>film_id</th>";
                    echo "<th>title</th>";
                    echo "<th>description</th>";
                    echo "<th>release_year</th>";
                    echo "<th>language_id</th>";
                    echo "<th>original_language_id</th>";
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
                    echo "<td>" . $row['original_language_id'] . "</td>";
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
            echo "</div>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "insert"){
    $film_id = $_POST['film_idins'];
    $title =  $_POST['titleins'];
    $description =  ucwords($_POST['descriptionins']);
    $release_year = $_POST['release_yearins'];
    $language_id =  $_POST['language_idins'];
    $original_language_id = $_POST['original_language_idins'];
    $rental_duration =  $_POST['rental_durationins'];
    $rental_rate =  $_POST['rental_rateins'];
    $length =  $_POST['lengthins'];
    $replacement_cost =  $_POST['replacement_costins'];
    $rating = strtoupper($_POST['ratingins']);
    $special_features =  ucwords($_POST['special_featuresins']);
    
    // Attempt insert query execution
    $sql = "INSERT INTO `film` (film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features,last_update) VALUES ('$film_id', '$title', '$description', '$release_year', '$language_id', '$original_language_id', '$rental_duration', '$rental_rate', '$length', '$replacement_cost', '$rating', '$special_features', CURRENT_TIMESTAMP())";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    $film_id = $_POST['film_idupt'];
    $title =  strtoupper($_POST['titleupt']);
    $description =  ucwords($_POST['descriptionupt']);
    $release_year = $_POST['release_yearupt'];
    $language_id = $_POST['language_idupt'];
    $original_language_id = $_POST['original_language_idupt'];
    $rental_duration = $_POST['rental_durationupt'];
    $rental_rate = $_POST['rental_rateupt'];
    $length = $_POST['lengthupt'];
    $replacement_cost =  $_POST['replacement_costupt'];
    $rating = strtoupper($_POST['ratingupt']);
    $special_features =  ucwords($_POST['special_featuresupt']);
       
     
    // Attempt update query execution
    $sql = "UPDATE film SET film_id = '$film_id', title = '$title', description = '$description', release_year = '$release_year', language_id = '$language_id', original_language_id = '$original_language_id', rental_duration = '$rental_duration', rental_rate='$rental_rate', length='$length', replacement_cost='$replacement_cost', rating='$rating', special_features='$special_features', last_update=CURRENT_TIMESTAMP() WHERE film_id='$film_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $film_id = $_POST['film_iddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM film WHERE film_id = '$film_id'";
    if(mysqli_query($link, $sql)){
        echo "Data Deleted";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// Close connection
mysqli_close($link);
?>
<div class="col-12">
    <button class="btn btn-primary" onclick="window.location.href='../index.html';" style="margin-left:45%; margin-top:3%">Home</button>
</div>

</body>
</html>



