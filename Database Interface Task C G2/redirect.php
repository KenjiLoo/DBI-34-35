<?php
    if(isset($_POST['next'])){
      $table = $_POST['table'];
      header("Location: " . "/" . $table . "/" . $table . ".php");
      exit();
    }
?>