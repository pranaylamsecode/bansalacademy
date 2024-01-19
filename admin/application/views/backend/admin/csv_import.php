<html>

 <div class="container box">
  <h3 align="center">Import Questions</h3>

  <form method="post" id="import_csv" enctype="multipart/form-data">
   <div class="form-group">
    <label>Select CSV File</label>
    <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
   </div>
   <br />
   <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
  </form>
  <br />
 <!--  <div id="imported_csv_data"></div> -->
 </div>


<script>
$(document).ready(function(){



 $('#import_csv').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php echo base_url(); ?>admin/import_csv",
   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   beforeSend:function(){
    $('#import_csv_btn').html('Importing...');
   },
   success:function(data)
   {
    $('#import_csv')[0].reset();
    $('#import_csv_btn').attr('disabled', false);
    $('#import_csv_btn').html('Import Done');
    /* load_data(); */
   }
  })
 });

});
</script>
