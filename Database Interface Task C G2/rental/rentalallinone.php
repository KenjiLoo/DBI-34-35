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
    $rental_id = $_POST['rentalidsel'];
    $rental_date = $_POST['rentaldatesel'];
    $inventory_id = $_POST['inventoryidsel'];
    $customer_id = $_POST['customeridsel'];
    $return_date = $_POST['returndatesel'];
    $staff_id = $_POST['staffidsel'];
    
    if ($return_date == 0){
        $return_date = 0;
    }
    
    $sql = "SELECT * FROM rental WHERE rental_id = '$rental_id' || rental_date='$rental_date' ||  inventory_id='$inventory_id' || customer_id='$customer_id' || return_date='$return_date' || staff_id='$staff_id'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
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
    $rental_id = $_POST['rentalidins'];
    $rental_date = $_POST['rentaldateins'];
    $inventory_id = $_POST['inventoryidins'];
    $customer_id = $_POST['customeridins'];
    $return_date = $_POST['returndateins'];
    $staff_id = $_POST['staffidins'];
    
     
    // Attempt insert query execution
    $sql = "INSERT INTO rental (rental_id, rental_date, inventory_id, customer_id, return_date, staff_id, last_update) VALUES ('$rental_id', '$rental_date', '$inventory_id', '$customer_id', '$return_date', '$staff_id', CURRENT_TIMESTAMP())";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    $rental_id = $_POST['rentalidupt'];
    $rental_date = $_POST['rentaldateupt'];
    $inventory_id = $_POST['inventoryidupt'];
    $customer_id = $_POST['customeridupt'];
    $return_date = $_POST['returndateupt'];
    $staff_id = $_POST['staffidupt'];
     
    // Attempt update query execution
    $sql = "UPDATE rental SET rental_id='$rental_id', rental_date='$rental_date', inventory_id='$inventory_id', customer_id='$customer_id', return_date='$return_date', staff_id='$staff_id', last_update=CURRENT_TIMESTAMP() WHERE rental_id='$rental_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $rental_id = $_POST['rentaliddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM rental WHERE rental_id = '$rental_id'";
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