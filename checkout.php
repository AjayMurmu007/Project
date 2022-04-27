<?php
session_start();
include('header.php');
include('database/db.php');
?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text">
        <h1 class="page-title">Checkout</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Checkout</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Checkout section start -->
<div id="rs-checkout" class="rs-checkout orange-color pt-100 pb-100 md-pt-70 md-pb-70">
     <div class="container">
         <div class="coupon-toggle">
             <div id="accordion" class="accordion">
                 <div class="card">
                     <div class="card-header" id="headingOne">
                         <!--<div class="card-title">-->
                         <!--    <span><i class="fa fa-window-maximize"></i> Have a coupon?</span>-->
                         <!--    <button class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Click here to enter your code</button>-->
                         <!--</div>-->
                     </div>
                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                         <!--<div class="card-body">-->
                         <!--    <p>If you have a coupon code, please apply it below.</p>-->
                         <!--    <div class="coupon-code-input">-->
                         <!--        <input type="text" name="coupon_code" placeholder="Coupon code" required="">-->
                         <!--    </div>-->
                         <!--    <button class="btn-shop orange-color" type="submit">apply coupon</button>-->
                         <!--</div>-->
                     </div>
                 </div>
             </div>
         </div>

         <div class="full-grid">
             <form action="payment_action.php" method="POST">
                 <div class="billing-fields">
                     <div class="checkout-title">
                         <h3>Billing details</h3>
                     </div>
                     <div class="form-content-box">
                         <div class="row">
                             <div class="col-md-6 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>First Name *</label>
                                     <input id="fname" name="fname" class="form-control-mod" type="text" required="">
                                 </div>
                             </div>
                             <div class="col-md-6 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Last Name *</label>
                                     <input id="lname" name="lname" class="form-control-mod" type="text" required="">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Country*</label>
                                     <input type="text" name="country" class="form-control" placeholder="Country">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Street address *</label>
                                     <input id="hnumber" name="address1" class="form-control-mod margin-bottom" type="text" placeholder="House number and street name" required="">
                                     <input id="hnumber-2" name="address2" class="form-control-mod" type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Town / City *</label>
                                     <input id="city" name="city" class="form-control-mod" type="text" required="">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>District *</label>
                                    <input type="text" name="district" class="form-control" placeholder="District">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Postcode / ZIP (optional)</label>
                                     <input id="pcode" name="pcode" class="form-control-mod" type="text">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Phone *</label>
                                     <input id="number" name="number" class="form-control-mod" type="text" required="">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Email address *</label>
                                     <input id="email" name="email" class="form-control-mod" type="email" required="">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div><!-- .billing-fields -->

                 <div class="additional-fields">
                     <div class="form-content-box">
                         <div class="checkout-title">
                             <h3>Additional information</h3>
                         </div>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <label>Order notes (optional)</label>
                                     <textarea name="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <input type="hidden" name="category" value="<?php echo $_SESSION["course_cate"]; ?>" />
                 <input type="hidden" name="course" value="<?php echo $_SESSION["course_name"]; ?>" />
                 <input type="hidden" name="img" value="<?php echo $_SESSION["img"]; ?>" />
                 <input type="hidden" name="duration" value="<?php echo $_SESSION["duration"]; ?>" />
                 <input type="hidden" name="price" value="<?php echo $_SESSION["price"]; ?>" />
                 <div class="ordered-product" style="overflow-x:scroll">
                     <div class="checkout-title">
                         <h3>Your order</h3>
                     </div>
                     <table>
                         <thead>
                             <tr>
                                 <th>Category</th>
                                 <th>Course Name</th>
                                 <th>Imgage</th>
                                 <th>Duration</th>
                                 <th>Price</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     <?php
                                      $ct=$_SESSION["course_cate"];
                                      $sw="SELECT * FROM cource_categories WHERE id=$ct";
                                      $sr=mysqli_query($con,$sw);
                                      if($sr==true){
                                          while($row=mysqli_fetch_assoc($sr)){
                                              echo $row['title'];
                                          }
                                      }else{
                                          echo"not connected";
                                      }
                                     ?>

                                 </td>
                                 <td><?php echo $_SESSION["course_name"]; ?></td>
                                 <td>
                                     <img src="admin/images/course/<?php echo $_SESSION["img"]; ?>" style="height:40px;width:40px"/>
                                 </td>
                                 <td>
                                   <select class="" name="">
                                     <option value="">select duration</option>
                                     <?php
                                     $cdur=$_SESSION["duration"];
                                     $ccdur=explode(",",$cdur);
                                     $ccd=count($ccdur);
                                     for ($i=0; $i <$ccd ; $i++) {
                                       ?>
                                       <option><?php echo $ccdur[$i]; ?></option>
                                       <?php
                                     }
                                     ?>
                                   </select>
                                 </td>
                                  <td>
                                    <select class="" name="">
                                      <option value="">select price</option>
                                    <?php
                                    $ppr=$_SESSION["price"];
                                    $cpprt=explode(",",$ppr);
                                    $cppo=count($cpprt);
                                    for ($j=0; $j <$cppo ; $j++) {
                                        ?>
                                   <option><?php echo $cpprt[$j]; ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                  </td>
                             </tr>

                         </tbody>
                         <tfoot>
                             <tr>
                                 <th colspan="4">Total Price</th>
                                 <th><?php //echo $_SESSION["price"]; ?></th>
                             </tr>

                         </tfoot>
                     </table>
                 </div>

                 <div class="payment-method mt-40 md-mt-20">
                     <div class="top-area">
                         <div class="payment-co"><span>PayPal</span> <img src="assets/images/paypal.png" alt="PayPal Logo"></div>
                         <div class="p-msg">Pay via PayPal you can pay with your credit card if you dont have a PayPal account.</div>
                     </div>
                     <div class="bottom-area">
                         <p class="mt-15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                         <button class="btn-shop orange-color" name="payaction" type="submit">Continue to payment</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
</div>
<!-- Checkout section end -->
<!-- Newsletter section start -->

<!-- Newsletter section end -->
<?php include('footer.php'); ?>
