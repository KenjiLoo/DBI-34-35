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
    $staff_id = $_POST['staffidsel'];
    $first_name =  ucwords($_POST['first_namesel']);
    $last_name =  ucwords($_POST['last_namesel']);
    $address_id = $_POST['addressidsel'];
    $picture = strtoupper($_POST['picturesel']); 
    $email = $_POST['emailsel'];
    $store_id = $_POST['storeidsel'];
    $active = $_POST['activesel'];
    $username = ucwords($_POST['usernamesel']);
    
    $sql = "SELECT * FROM staff WHERE staff_id = '$staff_id' || first_name = '$first_name' || last_name = '$last_name' || address_id = '$address_id' || email = '$email' || store_id = '$store_id' || active = '$active' || username = '$username' ";

    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div style='height: 300px;overflow: scroll;'>";
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
                    echo "<td>" . $row['picture'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['store_id'] . "</td>";
                    echo "<td>" . $row['active'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
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
    $staff_id = $_POST['staffidins'];
    $first_name =  ucwords($_POST['first_nameins']);
    $last_name =  ucwords($_POST['last_nameins']);
    $address_id = $_POST['addressidins'];
    $picture = strtoupper($_POST['pictureins']); 
    $email = $_POST['emailins'];
    $store_id = $_POST['storeidins'];
    $active = $_POST['activeins'];
    $username = ucwords($_POST['usernameins']);
    $password = $_POST['passwordins'];
    
    // Attempt insert query execution
    $sql = "INSERT INTO staff (staff_id, first_name, last_name, address_id, picture, email, store_id, active, username, password, last_update) VALUES ('$staff_id', '$first_name', '$last_name', '$address_id', '$picture', '$email', '$store_id', '$active', '$username', '$password', CURRENT_TIMESTAMP())";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
if ($action == "update"){
    $staff_id = $_POST['staffidupt'];
    $first_name =  ucwords($_POST['first_nameupt']);
    $last_name =  ucwords($_POST['last_nameupt']);
    $address_id = $_POST['addressidupt'];
    $picture = strtoupper($_POST['pictureupt']); 
    $email = $_POST['emailupt'];
    $store_id = $_POST['storeidupt'];
    $active = $_POST['activeupt'];
    $username = ucwords($_POST['usernameupt']);
    $password = $_POST['passwordupt'];

    // Attempt update query execution
    $sql = "UPDATE staff SET staff_id = '$staff_id', first_name = '$first_name', last_name = '$last_name', address_id = '$address_id', picture = '$picture', email = '$email', store_id = '$store_id', active = '$active', username = '$username', password = '$password', last_update=CURRENT_TIMESTAMP() WHERE staff_id='$staff_id'";
    
    if(mysqli_query($link, $sql) == TRUE){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);;
    }
}
if ($action == "delete"){
    $staff_id = $_POST['staffiddel'];
    // Attempt delete query execution
    $sql = "DELETE FROM staff WHERE staff_id = '$staff_id'";
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