<?php include('header.php'); 
include('database/db.php');
?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">Admission</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Admission</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Register Section -->
<section class="register-section pt-100 pb-100">
    <div class="container">
        <div class="register-box">

            <div class="sec-title text-center mb-30">
                <h2 class="title mb-10">Admission Form</h2>
            </div>

            <!-- Login Form -->
            <div class="styled-form">
                <div id="form-messages"></div>
                <form  method="post" action="admission_action.php">
                    <div class="row clearfix">
                        <!-- Form Group -->
                        <div class="form-group col-lg-12 mb-25">
                            <input type="text" id="Name" name="fullname" placeholder="Student Name" required>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="text" id="parentname" name="parentname" placeholder="Parents Name" required>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="number" id="phone_number" name="phone_number" placeholder="Contact Number" required>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                           <select class="form-control" id="coursecate" name="coursecate" required>
                               <option value="">Select Course</option>
                               <?php 
                                 $sql="SELECT * FROM course";
                                 $run=mysqli_query($con,$sql);
                                 if($run==true){
                                     while($data=mysqli_fetch_assoc($run)){
                                         ?>
                                         <option value="<?php echo $data['id']; ?>"><?php echo $data['course_name']; ?></option>
                                         <?php
                                     }
                                 }
                               ?>
                           </select>
                        </div>
                        <div class="form-group col-lg-12" id="duration">
                        </div>
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="number" id="Confirm" name="whatsno" placeholder="Whatsapp Number" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="address" placeholder="Address" value="" style="border-radius:2px" required></textarea>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="submit" name="admission" class="readon register-btn"><span class="txt">Apply</span></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- End Login Section -->
<?php include('footer.php'); ?>
<script>
    $('#coursecate').on('change',function(){
        var category=$(this).val()
         $.ajax({
              type:'post',
              url:'course_duraton.php',
              data:{category:category},
              success:function(data){
                  $('#duration').html(data);
              }
         });
    });
</script>
