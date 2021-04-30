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
    $store_id = $_POST['storeidsel'];
    $manager_staff_id =  strtoupper($_POST['managerstaffidsel']);
    $address_id =  strtoupper($_POST['addressidsel']);
    
    $sql = "SELECT * FROM store WHERE store_id = '$store_id' || manager_staff_id = '$manager_staff_id' || address_id = '$address_id'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
            echo "<table class='table table-striped'>";
                echo "<tr>";
                    echo "<th>store_id</th>";
                    echo "<th>manager_staff_id</th>";
                    echo "<th>address_id</th>";
                    echo "<th>last_update</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['store_id'] . "</td>";
                    echo "<td>" . $row['manager_staff_id'] . "</td>";
                    echo "<td>" . $row['address_id'] . "</td>";
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
    $store_id = $_POST['storeidins'];
    $manager_staff_id = strtoupper($_POST['managerstaffidins']);
    $address_id = strtoupper($_POST['addressidins']);
     
    // Attempt insert query execution
    $sql = "INSERT INTO store (store_id, manager_staff_id, address_id, last_update) VALUES ('$store_id', '$manager_staff_id', '$address_id', CURRENT_TIMESTAMP())";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    $store_id = $_POST['storeidupt'];
    $manager_staff_id = strtoupper($_POST['managerstaffidupt']);
    $address_id = strtoupper($_POST['addressidupt']);
     
    // Attempt update query execution
    $sql = "UPDATE store SET store_id='$store_id', manager_staff_id='$manager_staff_id', address_id='$address_id', last_update=CURRENT_TIMESTAMP() WHERE store_id='$store_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $store_id = $_POST['storeiddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM store WHERE store_id = '$store_id'";
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


