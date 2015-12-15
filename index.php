<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('include/bootstrap.php'); ?> 
</head>

<body>
<?php include('include/header.php'); ?> 
 

    <!-- Slider will start here -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                   <form method="POST" action="tbComplaintInsertRow.php">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="phoneNumber">PhoneNumber</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone number">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                      </div>
                       <div class="form-group">
                        <label for="problemType">Select Problem Type</label>
                         <select class="form-control" name="problemType" id="problemType">
                          <option>Water Problem</option>
                          <option>Electricity</option>
                          <option>Road problem</option>
                          <option>Garbauge issues </option>
                          <option>Awareness and city cleaning</option>
                        </select>
                      </div>
                     
                      <div class="form-group">
                          <label for="comment">Comment:</label>
                          <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                      </div>

                      
                      <button type="submit" class="btn btn-default" name="btn-save" id="btn-save">Submit</button>
                    </form>
                   
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Slider will end here -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script>
 $("#register").validate();
</script>
<script>
    $('.stopcrsl').carousel({
        interval: false
    })
</script>
 <script type="text/javascript">
// $(document).ready(function() { 
// $('.fancybox').fancybox(); 
// });
// 
 $(".fancybox") 
.attr('rel', 'gallery') 
.fancybox({ 
beforeLoad: function() { 
this.title = $(this.element).attr('caption'); 
} 
}); </script>
<script>
 $("#forgot").validate();
</script>
<script>
 $("#login").validate();
</script>
<script>
 $("#r_detail").validate();
</script>
<script>
 $("#r_profile").validate();
</script>

</body>
</html>
 <?php include('include/footer.php'); ?> 
<script>
$('#indxhlight').addClass('active');
</script> 
