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
    $address_id = $_POST['addressidsel'];
    $address =  ucwords($_POST['addresssel']);
    $address2 =  ucwords($_POST['address2sel']);
    $district =  ucwords($_POST['districtsel']);
    $city_id =  $_POST['cityidsel'];
    $postal_code =  $_POST['postalcodesel'];
    $phone =  $_POST['phonesel'];
    
    $sql = "SELECT * FROM address WHERE address_id = '$address_id'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
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
    $address_id = $_POST['addressidins'];
    $address =  ucwords($_POST['addressins']);
    $address2 =  ucwords($_POST['address2ins']);
    $district =  ucwords($_POST['districtins']);
    $city_id =  $_POST['cityidins'];
    $postal_code = $_POST['postalcodeins'];
    $phone =  $_POST['phoneins'];
     
    // Attempt insert query execution
    $sql = "INSERT INTO address (address_id, address, address2, district, city_id, postal_code, phone, last_update) VALUES ('$address_id', '$address', '$address2', '$district', '$city_id', '$postal_code', '$phone', CURRENT_TIMESTAMP())";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    $address_id = $_POST['addressidupt'];
    $address =  ucwords($_POST['addressupt']);
    $address2 =  ucwords($_POST['address2upt']);
    $district =  ucwords($_POST['districtupt']);
    $city_id =  $_POST['cityidupt'];
    $postal_code =  $_POST['postalcodeupt'];
    $phone =  $_POST['phoneupt'];
     
    // Attempt update query execution
    $sql = "UPDATE address SET address_id = '$address_id', address = '$address', address2 = '$address2', district = '$district', city_id = '$city_id', postal_code = '$postal_code', phone = '$phone', last_update=CURRENT_TIMESTAMP() WHERE address_id='$address_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $address_id = $_POST['addressiddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM address WHERE address_id = '$address_id'";
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


