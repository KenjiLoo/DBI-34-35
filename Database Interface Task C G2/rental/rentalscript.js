$("#action").change(function() {
  if ($(this).val() == "select") {
    $('#select').show();
    $('#insert').hide();
    $('#update').hide();
    $('#delete').hide();
  }
  else if ($(this).val() == "update") {
    $('#select').hide();
    $('#insert').hide();
    $('#update').show();
    $('#delete').hide();
  }
  else if ($(this).val() == "insert") {
    $('#select').hide();
    $('#insert').show();
    $('#update').hide();
    $('#delete').hide();
  } 
  else if ($(this).val() == "delete") {
    $('#select').hide();
    $('#insert').hide();
    $('#update').hide();
    $('#delete').show();
  }else {
    $('#select').hide();
    $('#insert').hide();
    $('#update').hide();
    $('#delete').hide();
  }
});
$("#action").trigger("change");
