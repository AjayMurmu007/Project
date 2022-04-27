<?php include('header.php');
include('../database/db.php');
$idd=$_GET['fid'];
$sql="SELECT * FROM faculty WHERE id=$idd";
$run=mysqli_query($con,$sql);
if ($run==true) {
    while ($data=mysqli_fetch_assoc($run)) {
          $id=$data['id'];
          $name=$data['name'];
          $imgs=$data['imgs'];
          $course=$data['course'];
          $faculty=$data['faculty'];
          $experience=$data['experience'];
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
                  <a href="teacher.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Update Faculties</h4>
                       <form class="custom-validation" action="action/faculty_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div>
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                            </div>
                            <input type="hidden" name="img2" value="<?php echo $imgs; ?>">
                            <img src="images/faculty/<?php echo $imgs; ?>" width="100%" alt="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <div>
                                <input type="text" name="name" value="<?php echo $name; ?>" id="name" class="form-control" placeholder="name" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Course</label>
                            <div>
                                <input type="text" name="course" value="<?php echo $course; ?>" id="course" class="form-control" placeholder="course" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Faculty</label>
                            <div>
                                <input type="text" name="faculty" id="faculty" value="<?php echo $faculty; ?>" class="form-control" placeholder="faculty" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Experience</label>
                            <div>
                                <input type="text" name="experience" id="experience" value="<?php echo $experience; ?>" class="form-control" placeholder="experience" />
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
