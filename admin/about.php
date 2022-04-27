<?php include('header.php'); ?>
<?php
include('../database/db.php');
$id="";
$title="";
$imgs="";
$description="";
$sql="SELECT * FROM about";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
       $id=$data['id'];
       $title=$data['title'];
       $imgs=$data['imgs'];
       $description=$data['description'];
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
                    <h4 class="card-title">About</h4>
                    <form class="custom-validation" action="action/about_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" required placeholder="title" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                            </div>
                            <input type="hidden" name="imgtext" value="<?php echo $imgs; ?>">
                            <?php
                             if (!empty($imgs)) {
                               ?>
                               <img src="images/about/<?php echo $imgs; ?>" alt="">
                               <?php
                             }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div>
                                <textarea required name="notes" class="form-control" rows="3"><?php echo $description; ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
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
