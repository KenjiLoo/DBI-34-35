<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Interface</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div style="height: 300px;overflow: scroll;">
        <?php include 'rentaldisplay.php';?>    
    </div>
    <div class="container" style="margin-top:1em">
    <form id="form" action="rentalallinone.php" method="post">
        <div class="row mb-3">
        <label class="col-md-3">Action to be performed?</label>
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
        <p>*Enter 1 requirement only</p>
        <div class="row mb-3">
          <label class="col-md-3">Rental ID:</label>
           <div class="col-md-3">
          <input type="number" class="form-control" name="rentalidsel" id="rentalid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Rental Date:</label>
          <div class="col-md-3">
          <input type="date" class="form-control" name="rentaldatesel" id="rentaldate">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Inventory ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="inventoryidsel" id="inventoryid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Customer ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customeridsel" id="customerid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Return Date:</label>
          <div class="col-md-3">
          <input type="date" class="form-control" name="returndatesel" id="returndate">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Stuff ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="staffidsel" id="staffid">
        </div>
        </div>
       </div>
       
       <div id="update">
        <div class="row mb-3">
          <label class="col-md-3">Rental ID (Fixed):</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="rentalidupt" id="rentalid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Rental Date:</label>
          <div class="col-md-3">
          <input type="date" class="form-control" name="rentaldateupt" id="rentaldate">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Inventory ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="inventoryidupt" id="inventoryid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Customer ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customeridupt" id="customerid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Return Date:</label>
          <div class="col-md-3">
          <input type="date" class="form-control" name="returndateupt" id="returndate">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Staff ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="staffidupt" id="staffid">
        </div>
        </div>
       </div>
       
      <div id="insert">
        <div class="row mb-3">
          <label class="col-md-3">Rental ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="rentalidins" id="rentalid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Rental Date:</label>
          <div class="col-md-3">
          <input type="date" class="form-control" name="rentaldateins" id="rentaldate">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Inventory ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="inventoryidins" id="inventoryid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Customer ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="customeridins" id="customerid">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Return Date:</label>
          <div class="col-md-3">
          <input type="date" class="form-control" name="returndateins" id="returndate">
        </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Stuff ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="staffidins" id="staffid">
        </div>
        </div>
       </div>
        <div id="delete">
        <div class="row mb-3">
          <label class="col-md-3">Rental ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="rentaliddel" id="rentalid">
        </div>
        </div>
       </div>
      
      <div class="col-12"> 
        <input type="submit" class="btn btn-primary" name="next" value="Next"/>
      </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="rentalscript.js"></script>
  </body>
</html>