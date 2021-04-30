<!DOCTYPE html>
<html>
<head>
    <title>Database Interface</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div style="height: 300px;overflow: scroll;">
      <?php include 'display.php';?>
    </div>
    <div class="container" style="margin-top:1em">
    <form id="form" action="allinone.php" method="post">
      <div class="row mb-3">
      <label class="col-md-3">What action do you wish to perform?</label>
      <div class="col-md-3">
        <select class="form-select" id="action" name="action" required>
          <option value="" selected disabled></option>
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
          <label class="col-md-3">Customer ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customer_idsel" id="customer_id">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Store ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="store_idsel" id="store_id">
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
          <input type="text" class="form-control"name="last_namesel" id="last_name">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Email:</label>
          <div class="col-md-3">
          <input type="email" class="form-control" name="emailsel" id="email">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Address ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="address_idsel" id="address_id">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Active:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="activesel" id="active" required min="0" max="1">
          </div>
        </div>
       </div>
       
       <div id="update">
        <div class="row mb-3">
          <label class="col-md-3">Customer ID (Fixed):</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customer_idupt" id="customer_id">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Store ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="store_idupt" id="store_id">
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
          <label class="col-md-3">Email:</label>
          <div class="col-md-3">
          <input type="email" class="form-control" name="emailupt" id="email">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Address ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="address_idupt" id="address_id">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Active:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" id="active" name="activeupt">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Create Date:</label>
          <div class="col-md-3">
          <input type="datetime-local" class="form-control" name="create_dateupt" id="create_date">
          </div>
        </div>
       </div>
       
       <div id="insert">
        <div class="row mb-3">
          <label class="col-md-3">Customer ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customer_idins" id="customer_id">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Store ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="store_idins" id="store_id">
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
        <div class="row mb-3">
          <label class="col-md-3">Email:</label>
          <input type="email" class="form-control" name="emailins" id="email">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Address ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="address_idins" id="address_id">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Active:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="activeins" id="active">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Create Date:</label>
          <div class="col-md-3">
          <input type="datetime-local" class="form-control" name="create_dateins" id="create_date">
          </div>
        </div>
       </div>
       
       <div id="delete">
         <div class="row mb-3">
          <label class="col-md-3">Customer ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customer_iddel" id="customer_id">
          </div>
        </div>
       </div>
      <div class="col-12"> 
        <input type="submit" class="btn btn-primary" name="next" value="Next"/>
      </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="customerscript.js"></script>
  </body>
</html>