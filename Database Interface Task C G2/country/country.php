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
      <?php include 'display.php';?>
    </div>
    <div class="container" style="margin-top:1em">
    <form id="form" action="allinone.php" method="post">
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
        <label class="col-md-3">Country ID:</label>
        <div class="col-md-3">
          <input type="number" class="form-control" name="countryidsel" id="countryid">
        </div>
        </div>
        <div class="row mb-3">
        <label class="col-md-3">Country:</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="countrysel" id="country">
        </div>
        </div>
       </div>
      
      <div id="update">
         <div class="row mb-3">
          <label class="col-md-3">Country ID (Fixed):</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="countryidupt" id="countryid">
          </div>
         </div>
         <div class="row mb-3">
          <label class="col-md-3">Country:</label>
          <div class="col-md-3">
          <input type="text" class="form-control" name="countryupt" id="country">
          </div>
         </div>
       </div>
      
      <div id="insert">
        <div class="row mb-3">
          <label class="col-md-3">country ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="countryidins" id="countryid">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3">Country:</label>
          <div class="col-md-3">
          <input type="text" class="form-control" name="countryins" id="country">
          </div>
        </div>
       </div>
      
      <div id="delete">
        <div class="row mb-3">
          <label class="col-md-3">Country ID:</label>
          <div class="col-md-3">
          <input type="number" class="form-control" name="countryiddel" id="countryid">
          </div>
        </div>
       </div>
      
      <div class="col-12"> 
        <input type="submit" class="btn btn-primary" name="next" value="Next"/>
      </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="countryscript.js"></script>
  </body>
</html>