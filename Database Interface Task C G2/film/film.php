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
         <label class="col-md-3">Film ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="film_idsel" id="film_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Title:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="titlesel" id="title">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Description:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="descriptionsel" id="description">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Release Year:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="release_yearsel" id="release_year">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Language ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="language_idsel" id="language_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Rental Duration:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="rental_durationsel" id="rental_duration">
         </div>
        </div>        
        <div class="row mb-3">
         <label class="col-md-3">Rental Rate:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="rental_ratesel" id="rental_rate" step="0.01">
         </div>
        </div>        
        <div class="row mb-3">
         <label class="col-md-3">Length:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="lengthsel" id="length">
         </div>
        </div>          
        <div class="row mb-3">
         <label class="col-md-3">Replacement Cost:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="replacement_costsel" id="replacement_cost" step="0.01">
         </div>
        </div>  
        <div class="row mb-3">
         <label class="col-md-3">Rating:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="ratingsel" id="rating">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Special Features:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="special_featuressel" id="special_features">
         </div>
        </div>
       </div>
       
       <div id="update">
        <div class="row mb-3">
         <label class="col-md-3">Film ID (Fixed):</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="film_idupt" id="film_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Title:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="titleupt" id="title">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Description:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="descriptionupt" id="description">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Release Year:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="release_yearupt" id="release_year">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Language ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="language_idupt" id="language_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Original Language ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="original_language_idupt" id="original_language_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Rental Duration:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="rental_durationupt" id="rental_duration">
         </div>
        </div>        
        <div class="row mb-3">
         <label class="col-md-3">Rental Rate:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="rental_rateupt" id="rental_rate" step="0.01">
         </div>
        </div>        
        <div class="row mb-3">
         <label class="col-md-3">Length:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="lengthupt" id="length">
         </div>
        </div>          
        <div class="row mb-3">
         <label class="col-md-3">Replacement Cost:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="replacement_costupt" id="replacement_cost" step="0.01">
         </div>
        </div>  
        <div class="row mb-3">
         <label class="col-md-3">Rating:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="ratingupt id="rating">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Special Features:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="special_featuresupt" id="special_features">
         </div>
        </div>
       </div>
       
      <div id="insert">
        <div class="row mb-3">
         <label class="col-md-3">Film ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="film_idins" id="film_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Title:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="titleins" id="title">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Description:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="descriptionins" id="description">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Release Year:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="release_yearins" id="release_year">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Language ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="language_idins" id="language_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Original Language ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="original_language_idins" id="original_language_id">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Rental Duration:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="rental_durationins" id="rental_duration">
         </div>
        </div>        
        <div class="row mb-3">
         <label class="col-md-3">Rental Rate:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="rental_rateins" id="rental_rate" step="0.01">
         </div>
        </div>        
        <div class="row mb-3">
         <label class="col-md-3">Length:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="lengthins" id="length">
         </div>
        </div>          
        <div class="row mb-3">
         <label class="col-md-3">Replacement Cost:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="replacement_costins" id="replacement_cost" step="0.01">
         </div>
        </div>  
        <div class="row mb-3">
         <label class="col-md-3">Rating:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="ratingins" id="rating">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-md-3">Special Features:</label>
         <div class="col-md-3">
          <input type="text" class="form-control" name="special_featuresins" id="special_features">
         </div>
        </div>
       </div>
       
       <div id="delete">
        <div class="row mb-3">
         <label class="col-md-3">Film ID:</label>
         <div class="col-md-3">
          <input type="number" class="form-control" name="film_iddel" id="film_id">
         </div>
        </div>
       </div>

      <div class="col-12"> 
        <input type="submit" class="btn btn-primary" name="next" value="Next"/>
      </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="filmscript.js"></script>
  </body>
</html>