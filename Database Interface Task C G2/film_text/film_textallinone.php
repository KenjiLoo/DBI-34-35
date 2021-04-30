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
    
    $film_id=  strtoupper($_POST['filmidsel']);
	$title= $_POST['titlesel'];
	$description= $_POST['descriptionsel'];
    
    
    $sql = "SELECT * FROM film_text WHERE film_id = '$film_id' || title = '$title' || description='$description' ";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
            echo "<table class='table table-striped'>";
                echo "<tr>";
                    
                    echo "<th>film_id</th>";
					echo "<th>title</th>";
					echo "<th>description</th>";
                    
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
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
}
if ($action == "insert"){
    
    $film_id = strtoupper($_POST['filmidins']);
	$title = $_POST['titleins'];
	$description = $_POST['descriptionins'];
    
     
    // Attempt insert query execution
    $sql = "INSERT INTO film_text (film_id, title, description) VALUES ('$film_id', '$title','$description')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    
    $film_id = strtoupper($_POST['filmidupt']);
	$title= $_POST['titleupt'];
	$description= $_POST['descriptionupt'];
	

     
    // Attempt update query execution
    $sql = "UPDATE film_text SET film_id='$film_id', title='$title',description='$description' WHERE film_id='$film_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $film_id = $_POST['filmiddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM film_text WHERE film_id = '$film_id'";
    if(mysqli_query($link, $sql)){
        echo "Data Deleted";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// Close connection
mysqli_close($link);
?>
<br>
<div class="col-12">
    <button class="btn btn-primary" onclick="window.location.href='../index.html';" style="margin-left:45%; margin-top:3%">Home</button>
</div>
</body>
</html>


