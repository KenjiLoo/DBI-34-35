<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Interface</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div style="height: 300px;overflow: scroll;">
      <?php include 'staffdisplay.php';?>
    </div>
    <div class="container" style="margin-top:1em">
    <form id="form" action="staffinone.php" method="post">
      <div class="row mb-3">
      <label class="col-md-3">Action to be performed</label>
      <div class="col-md-3">
        <select class="form-select" id="action" name="action" required>
            <option value="" selected disabled>---Choose one option---</option>
            <option value="select">Select</option>
            <option value="update">Update</option>
            <option value="insert">Insert</option>
            <option value="delete">Delete</option>
        </select>
      </div>
      </div>
      
       <div id="select">
        <label>*Enter 1 requirement only</label>
        <div class="row mb-3">
        <label class="col-md-3">Staff ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="staffidsel" id="staff_id">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">First Name:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="first_namesel" id="first_name">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Last Name:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="last_namesel" id="last_name">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Address ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="addressidsel" id="address_id">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Email:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="emailsel" id="email">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Store ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="storeidsel" id="storeid">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Active:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="activesel" id="active">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Username:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="usernamesel" id="username">
        </div>
        </div>        
       </div>
       
       <div id="update">
        <div class="row mb-3">
        <label class="col-md-3">Staff ID (Fixed):</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="staffidupt" id="staff_id">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">First Name:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="first_nameupt" id="first_name">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Last Name:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="last_nameupt" id="last_name">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Address ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="addressidupt" id="address_id">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Picture:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="pictureupt" id="picture">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Email:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="emailupt" id="email">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Store ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="storeidupt" id="storeid">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Active:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="activeupt" id="active">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Username:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="usernameupt" id="username">
        </div>
        </div>        
        <div class="row mb-3">
        <label class="col-md-3">Password:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="passwordupt" id="password">
        </div>
        </div> 
       </div>
       
      <div id="insert">
        <div class="row mb-3">
        <label class="col-md-3">Staff ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="staffidins" id="staff_id">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">First Name:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="first_nameins" id="first_name">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Last Name:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="last_nameins" id="last_name">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Address ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="addressidins" id="address_id">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Picture:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="pictureins" id="picture">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Email:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="emailins" id="email">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Store ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="storeidins" id="storeid">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Active:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="activeins" id="active">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Username:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="usernameins" id="username">
        </div>
        </div>        
        <div class="row mb-3">
        <label class="col-md-3">Password:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="passwordins" id="password">
        </div>
        </div> 
       </div>
       
       <div id="delete">
        <div class="row mb-3">
        <label class="col-md-3">Staff ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="staffiddel" id="staff_id">
        </div>
        </div>
       </div>

      <div class="col-12"> 
        <input type="submit" class="btn btn-primary" name="next" value="Next"/>
      </div>
      
     </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="staffscript.js"></script>
    
  </body>
</html>