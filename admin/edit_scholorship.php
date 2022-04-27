<?php include('header.php');
include('../database/db.php');
$cid=$_GET['cid'];
$sql="SELECT * FROM scholorship WHERE id=$cid";
$run=mysqli_query($con,$sql);
if($run==true){
    while($data=mysqli_fetch_assoc($run)){
          $id=$data['id'];
          $title=$data['title'];
          $fee=$data['fee'];
          $imgs=$data['imgs'];
          $video_url=$data['video_url'];
          $date1=$data['date1'];
          $ldescription=$data['ldescription'];
          $sdescription=$data['sdescription'];
    }
}
?>
<div class="container-fluid">
    <!-- end row -->
    <div class="row">
      <div class="col-xl-2"></div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                  <a href="scholarship.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Scholarship Form</h4>
                       <form class="custom-validation" action="action/scholoarship_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo $id ?>" />
                              <label class="form-label">Scholarship Title</label>
                              <input type="test" name="scholoartitle" value="<?php echo $title; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Scholarship Fee</label>
                                <div>
                                    <input type="text" name="fee" value="<?php echo $fee; ?>" id="fee" class="form-control" />
                                </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="imgs"  class="form-control" placeholder="image" />
                            </div>
                            <input type="hidden" name="img2" value="<?php echo $imgs; ?>" />
                            <img src="images/scholarship/<?php echo $imgs; ?>" style="height:auto;width:100%"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Video Url</label>
                            <div>
                                <input type="url" name="url" id="url" value="<?php echo $video_url; ?>" class="form-control" placeholder="Video url" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <div>
                                <input type="date" name="date" id="date" value="<?php echo $date1; ?>" class="form-control" placeholder="date" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Long Description</label>
                            <div>
                                <textarea id="editor"  name="lnotes" class="form-control" rows="3"><?php echo $ldescription; ?></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Short Description</label>
                            <div>
                                <textarea id="editor2"  name="snotes" class="form-control" rows="3"><?php echo $sdescription; ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">
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
<script src="cke_editor4/ckeditor.js"></script>
<script src="cke_editor4/ck_finder/ckfinder.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
<script>tinymce.init({selector:''});</script>
<script>
  var editor=CKEDITOR.replace('editor');
    CKFinder.setupCKEditor( editor );
    var editor2=CKEDITOR.replace('editor2');
    CKFinder.setupCKEditor( editor2 );
</script>
<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="duration[]" class="form-control m-input" placeholder="course duration" autocomplete="off">';
        html += '<input type="text" name="price[]" class="form-control m-input" placeholder="course price" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>
