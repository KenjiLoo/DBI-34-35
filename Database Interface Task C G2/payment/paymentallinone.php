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
 $payment_id = $_POST['paymentidsel'];
 $customer_id = $_POST['customeridsel'];
 $staff_id = $_POST['staffidsel'];
 $payment_date = $_POST['paymentdatesel'];
 $rental_id = $_POST['rentalidsel'];

 $sql = "SELECT * FROM payment WHERE payment_id = '$payment_id' || customer_id = '$customer_id' || staff_id = '$staff_id' || payment_date = '$payment_date'|| rental_id = '$rental_id'";
 if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div style='height: 300px;overflow: scroll;'>";
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>payment_id</th>";
                echo "<th>customer_id</th>";
                echo "<th>staff_id</th>";
                echo "<th>amount</th>";
                echo "<th>payment_date</th>";
                echo "<th>last_update</th>";
                echo "<th>rental_id</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['payment_id'] . "</td>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['staff_id'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['payment_date'] . "</td>";
                echo "<td>" . $row['last_update'] . "</td>";
                echo "<td>" . $row['rental_id'] . "</td>";
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
 $payment_id = $_POST['paymentidins'];
 $customer_id = $_POST['customeridins'];
 $staff_id = $_POST['staffidins'];
 $amount = $_POST['amountins'];
 $payment_date = $_POST['paymentdateins'];
 $rental_id = $_POST['rentalidins'];
 
 // Attempt insert query execution
 $sql = "INSERT INTO payment (payment_id, customer_id, staff_id, amount, payment_date, last_update, rental_id) VALUES ('$payment_id', '$customer_id', '$staff_id', '$amount', '$payment_date', CURRENT_TIMESTAMP(), '$rental_id')";
 if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
}
if ($action == "update"){
 $payment_id = $_POST['paymentidupt'];
 $customer_id = $_POST['customeridupt'];
 $staff_id = $_POST['staffidupt'];
 $amount = $_POST['amountupt'];
 $payment_date = $_POST['paymentdateupt'];
 $rental_id = $_POST['rentalidupt'];
 
 // Attempt update query execution
 $sql = "UPDATE payment SET payment_id='$payment_id', customer_id='$customer_id', staff_id='$staff_id', amount='$amount', payment_date='$payment_date', last_update=CURRENT_TIMESTAMP(), rental_id = '$rental_id' WHERE payment_id='$payment_id'";

 if(mysqli_query($link, $sql) == TRUE){
    echo "Records updated successfully.";
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
 }
}
if ($action == "delete"){
 $payment_id = $_POST['paymentiddel'];
 $customer_id = $_POST['customeriddel'];
 $staff_id = $_POST['staffiddel'];

 // Attempt delete query execution
 $sql = "DELETE FROM payment WHERE payment_id = '$payment_id'";
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


