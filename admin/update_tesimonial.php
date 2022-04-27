<?php include('header.php');
include('../database/db.php');
$idd=$_GET['cid'];
$sql="SELECT * FROM testimonial WHERE id=$idd";
$run=mysqli_query($con,$sql);
if ($run==true) {
    while ($data=mysqli_fetch_assoc($run)) {
          $id=$data['id'];
          $name=$data['name'];
          $imgs=$data['imgs'];
          $details=$data['details'];
    }
}
?>
<div class="container-fluid">
    <!-- end row -->
    <div class="row">
      <div class="col-xl-3"></div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                  <a href="testimonial.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Update Testimonial</h4>
                       <form class="custom-validation" action="action/testimonial_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                              <input type="hidden" name="img2" value="<?php echo $imgs; ?>">
                            </div>
                            <img src="images/testimonial/<?php echo $imgs; ?>" style="height: 250px;width: 100%" alt="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <div>
                                <input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control" placeholder="name" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div>
                                <textarea  name="notes" class="form-control" rows="3"><?php echo $details; ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">
                                Update
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
<?php include('footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
