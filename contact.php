<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/bootstrap.php'); ?> 
</head>

<body>
<?php include('include/header.php'); ?>
    <!-- contactus form -->
    <div class="container-fluid">
       <div class="container">
          <div class="row">
              <div class="col-md-6">
                <div class="">
                    <div class="row">
                        <form name="frm1" method="post" action="">
                            <div class="form-part">
                                <ul>
                                    <li>
                                        <div class="form-group shaddow">
                                            <div class="input-group">
                                                <span class="input-group-addon no-radius"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control no-radius" aria-describedby="inputGroupSuccess1Status" placeholder="Name*" name="fname" id="fname" required="required">
                                            </div>
                                        </div>
                                    </li>
                                   <li>
                                        <div class="form-group">
                                            <div class="input-group shaddow">
                                                <span class="input-group-addon no-radius"><i class="fa fa-envelope"></i></span>
                                                <input type="text" required="required" name="femail" id="femail" placeholder="Email*" aria-describedby="inputGroupSuccess1Status" class="form-control no-radius">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <div class="input-group shaddow">
                                                <span class="input-group-addon no-radius"><i class="fa fa-mobile"></i></span>
                                                <input type="text" class="form-control no-radius" aria-describedby="inputGroupSuccess1Status" placeholder="Phone*" name="fphone"  id="fphone" required="required">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <textarea placeholder="Message*" rows="3"  name ="fmessage" id="fmessage" class="form-control no-radius shaddow"></textarea>
                                    </li>
                                    <li>
                                        <input type="submit" class="btn submit-btn shaddow" name="btn-save" id="btn-save" value="Send">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
              <div class="col-md-6"> </div>
          </div> 
       </div> 
    </div>
    <!-- contactus form -->

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
