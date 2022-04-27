<?php include('header.php'); 
include('database/db.php');
?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">Enquiry Form</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Enquiry</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Register Section -->
<section class="register-section pt-100 pb-100">
    <div class="container">
        <div class="register-box">

            <div class="sec-title text-center mb-30">
                <h2 class="title mb-10">Enquiry Form</h2>
            </div>

            <!-- Login Form -->
            <div class="styled-form">
                <div id="form-messages"></div>
                <form  method="post" action="enquiry_form.php">
                    <div class="row clearfix">
                        <!-- Form Group -->
                        <div class="form-group col-lg-12 mb-25">
                            <input type="text" id="Name" name="fullname" placeholder="Name" required>
                        </div>
                        <!-- Form Group -->
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="number" id="phone_number" name="phone_number" placeholder="Contact Number" required>
                        </div>
                        <!-- Form Group -->
                        <!-- Form Group -->
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="address" placeholder="Message" value="" style="border-radius:2px" required></textarea>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="submit" name="admission" class="readon register-btn"><span class="txt">Submit</span></button>
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
<?php 
if(isset($_POST['admission'])){
    $name=$_POST['fullname'];
    $phone_number=$_POST['phone_number'];
    $address=$_POST['address'];
    $date1=date('d-m-Y');
    $sql="INSERT INTO `enquiry`(`name`, `mobile`, `description`, `date1`) VALUES ('$name','$phone_number','$address','$date1')";
    $run=mysqli_query($con,$sql);
    if($run==true){
        ?>
        <script>
            alert('Thank you for your enquiry , we will solve your query as soon as possible.');
            window.location='enquiry_form.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('something went wrong!!');
            window.location='enquiry_form.php';
        </script>
        <?php
    }
}

?>