<?php include('header.php');
include('../database/db.php');
$id=$_GET['gid'];
$sql="SELECT * FROM gallery WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
         $id=$data['id'];
         $name=$data['name'];
         $imgs=$data['imgs'];
         $date1=$data['date1'];
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
                  <a href="gallery.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Add Gallery</h4>
                       <form class="custom-validation" action="action/gallery_action.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <label class="form-label">Title</label>
                                <div>
                                    <input type="text" name="title" value="<?php echo $name; ?>" id="title" class="form-control" placeholder="title" />
                                </div>
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="hidden" name="img2" value="<?php echo $imgs; ?>">
                            <div>
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                            </div>
                            <img src="images/gallery/<?php echo $imgs; ?>" width="100%" alt="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <div>
                                <input type="date" value="<?php echo $date1; ?>" name="date" id="date" class="form-control" placeholder="date" />
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
