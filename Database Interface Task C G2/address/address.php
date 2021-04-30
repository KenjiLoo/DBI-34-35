<!DOCTYPE html>
<html>
<head>
    <title>Database Interface</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div style="height: 300px;overflow: scroll;">
        <?php include 'display.php';?>
    </div>
    <div class="container" style="margin-top:1em">
    <form id="form" action="addressallinone.php" method="post">
        <div class="row mb-3">
        <label class="col-md-3">What action do you wish to perform?</label>
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
              <label class="col-md-3">Address ID:</label>
            <div class="col-md-3">
              <input type="number" class="form-control" name="addressidsel" id="addressid">
            </div>
            </div>
            <div class="row mb-3">
              <label class="col-md-3">District:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="districtsel" id="district">
            </div>
            </div>
           </div>
           
           <div id="update">
            <div class="row mb-3">
              <label class="col-md-3">Address ID:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="addressidupt" id="addressid">
            </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Address:</label>
              <div class="col-md-3">
              <input type="text" class="form-control" name="addressupt" id="address">
              </div>
             </div>
             
            <div class="row mb-3">
              <label class="col-md-3">Address 2:</label>
              <div class="col-md-3">
              <input type="text" class="form-control" name="address2upt" id="address2">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">District:</label>
              <div class="col-md-3">
              <input type="text" class="form-control" name="districtupt" id="district">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">City ID:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="cityidupt" id="cityid">
             </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Postal Code:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="postalcodeupt" id="postalcode">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Phone:</label>
              <div class="col-md-3">
              <input type="tel" class="form-control" name="phoneupt" id="phone">
              </div>
            </div>
           </div>
           
          <div id="insert">
            <div class="row mb-3">
              <label class="col-md-3">Address ID:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="addressidins" id="addressid">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Address:</label>
              <div class="col-md-3">
              <input type="text" class="form-control" name="addressins" id="address">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Address 2:</label>
              <div class="col-md-3">
              <input type="text" class="form-control" name="address2ins" id="address2">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">District:</label>
              <div class="col-md-3">
              <input type="text" class="form-control" name="districtins" id="district">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">City ID:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="cityidins" id="cityid">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Postal Code:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="postalcodeins" id="postalcode">
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-md-3">Phone:</label>
              <div class="col-md-3">
              <input type="tel" class="form-control" name="phoneins" id="phone">
              </div>
            </div>
           </div>
           
            <div id="delete">
              <div class="row mb-3">
              <label class="col-md-3">Address ID:</label>
              <div class="col-md-3">
              <input type="number" class="form-control" name="addressiddel" id="addressid">
              </div>
            </div>
           </div>
           
        <div class="col-12">    
          <input type="submit" class="btn btn-primary" name="next" value="Next"/>
        </div>
        </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="addressscript.js"></script></foot>
  </body>
</html>