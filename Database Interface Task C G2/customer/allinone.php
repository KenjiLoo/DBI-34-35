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
    $customer_id = $_POST['customer_idsel'];
    $store_id =  strtoupper($_POST['store_idsel']);
    $first_name =  strtoupper($_POST['first_namesel']);
    $last_name =  strtoupper($_POST['last_namesel']);
    $email =  $_POST['emailsel'];
    $address_id =  $_POST['address_idsel'];
    $active = $_POST['activesel'];
    $create_date = $_POST['create_datesel'];
    
    $sql = "SELECT * FROM customer WHERE customer_id = '$customer_id' || store_id = '$store_id' || first_name = '$first_name' || last_name = '$last_name' || email = '$email' || address_id = '$address_id' || active = '$active'";
    
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
            echo "<table class='table table-striped'>";
                echo "<tr>";
                    echo "<th>customer_id</th>";
                    echo "<th>store_id</th>";
                    echo "<th>first_name</th>";
                    echo "<th>last_name</th>";
                    echo "<th>email</th>";
                    echo "<th>address_id</th>";
                    echo "<th>active</th>";
                    echo "<th>create_date</th>";
                    echo "<th>last_update</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['customer_id'] . "</td>";
                    echo "<td>" . $row['store_id'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['address_id'] . "</td>";
                    echo "<td>" . $row['active'] . "</td>";
                    echo "<td>" . $row['create_date'] . "</td>";
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
    $customer_id = $_POST['customer_idins'];
    $store_id =  $_POST['store_idins'];
    $first_name =  strtoupper($_POST['first_nameins']);
    $last_name =  strtoupper($_POST['last_nameins']);
    $email =  $_POST['emailins'];
    $address_id = $_POST['address_idins'];
    $active =  $_POST['activeins'];
    $create_date =  $_POST['create_dateins'];
    
    // Attempt insert query execution
    $sql = "INSERT INTO `customer` (customer_id, store_id, first_name, last_name, email, address_id, active, create_date,last_update) VALUES ('$customer_id', '$store_id', '$first_name', '$last_name', '$email', '$address_id', '$active', '$create_date', CURRENT_TIMESTAMP())";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    $customer_id = $_POST['customer_idupt'];
    $store_id =  $_POST['store_idupt'];
    $first_name =  strtoupper($_POST['first_nameupt']);
    $last_name =  strtoupper($_POST['last_nameupt']);
    $email =  $_POST['emailupt'];
    $address_id =  $_POST['address_idupt'];
    $active =  $_POST['activeupt'];
    $create_date =  $_POST['create_dateupt'];
     
    // Attempt update query execution
    $sql = "UPDATE customer SET customer_id = '$customer_id', store_id = '$store_id', first_name = '$first_name', last_name = '$last_name', email = '$email', address_id = '$address_id', active = '$active', create_date='$create_date', last_update=CURRENT_TIMESTAMP() WHERE customer_id='$customer_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $customer_id = $_POST['customer_iddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM customer WHERE customer_id = '$customer_id'";
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


