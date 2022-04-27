<?php include('header.php');
include('../database/db.php');
$id=$_GET['nid'];
$sql="SELECT * FROM notice WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
   while ($data=mysqli_fetch_assoc($run)) {
         $id=$data['id'];
         $name=$data['name'];
         $imgs=$data['imgs'];
         $date1=$data['date1'];
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
                  <a href="notice.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Add Notice</h4>
                       <form class="custom-validation" action="action/notice_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                            </div>
                            <input type="hidden" name="img2" value="<?php echo $imgs; ?>">
                            <img src="images/notice/<?php echo $imgs; ?>" width="100%" alt="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <div>
                                <input type="text" name="title" value="<?php echo $name; ?>" id="title" class="form-control" placeholder="title" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <div class="input-group" id="datepicker2">
                                <input type="text" name="date1" value="<?php echo $date1; ?>" class="form-control" placeholder="dd M, yyyy"
                                    data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                    data-date-autoclose="true">

                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div>
                              <textarea name="desc" class="form-control" rows="8" cols="80"><?php echo $description; ?></textarea>
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
