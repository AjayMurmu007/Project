<?php include('header.php');
include('../database/db.php');
 $idd=$_GET['cid'];
 $sql="SELECT * FROM course WHERE id=$idd";
 $run=mysqli_query($con,$sql);
 if ($run==true) {
    while ($row=mysqli_fetch_assoc($run)) {
          $id=$row['id'];
          $course_cate=$row['course_cate'];
          $ctype=$row['course_type'];
          $cduration=$row['duration'];
          $course_name=$row['course_name'];
          $img=$row['img'];
          $video_url=$row['video_url'];
          $date1=$row['date1'];
          $price=$row['price'];
          $Description=$row['Description'];
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
                  <a href="course.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Update Course</h4>
                       <form class="custom-validation" action="action/course_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <label class="form-label">Course Category</label>
                              <select  class="form-control" name="category">
                                <?php
                                $sql3="SELECT * FROM cource_categories WHERE id=$id";
                                $run3=mysqli_query($con,$sql3);
                                if ($run3==true) {
                                  while ($dd=mysqli_fetch_assoc($run3)) {
                                        ?>
                                          <option value="<?php echo $dd['id'] ?>"><?php echo $dd['title']; ?></option>
                                        <?php
                                  }
                                }
                                ?>
                                <?php
                                $sql="SELECT * FROM cource_categories";
                                $run=mysqli_query($con,$sql);
                                if ($run==true) {
                                    while ($data=mysqli_fetch_assoc($run)) {
                                      ?>
                                      <option value="<?php echo $data['id']; ?>"><?php echo $data['title']; ?></option>
                                      <?php
                                    }
                                }
                                ?>
                              </select>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Course Name</label>
                                <div>
                                    <input type="text" name="name" value="<?php echo $course_name; ?>" id="name" class="form-control" placeholder="course name" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Course Type</label>
                                <div>
                                    <input type="text" name="ctype" value="<?php echo $ctype; ?>" id="name" class="form-control" placeholder="course type" />
                                </div>
                            </div>
                            <div class="mb-3">
                              <div class="row">
                                <div class="row">
          <div class="col-lg-12">

              <div id="newRow">
                <?php
                 $cdur=$cduration;
                 $carr=explode(",",$cdur);
                 $cc=count($carr);

                 $pr=$price;
                 $parr=explode(",",$pr);
                 $cp=count($parr);
                 for ($i=0; $i <$cc ; $i++) {
                   ?>
                   <div id="inputFormRow">
                   <div class="input-group mb-3">
                       <input type="text" name="duration[]" value="<?php echo $carr[$i]; ?>" class="form-control m-input" placeholder="course duration" autocomplete="off">
                       <input type="text" name="price[]" value="<?php echo $parr[$i]; ?>" class="form-control m-input" placeholder="course price" autocomplete="off">
                       <div class="input-group-append">
                           <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                       </div>
                   </div>
                   </div>
                   <?php
                 }
                ?>
              </div>
              
              <button id="addRow" type="button" class="btn btn-info">Add Row</button>
          </div>
      </div>
                              </div>
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                            </div>
                            <input type="hidden" name="img2" value="<?php echo $img; ?>">
                            <img src="images/course/<?php echo $img; ?>" height="300px" width="50%" alt="">
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
                            <label class="form-label">Description</label>
                            <div>
                                <textarea id="editor" name="notes" class="form-control" rows="3"><?php echo $Description; ?></textarea>
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
<script src="cke_editor4/ckeditor.js"></script>
<script src="cke_editor4/ck_finder/ckfinder.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
<script>tinymce.init({selector:''});</script>
<script>
  var editor=CKEDITOR.replace('editor');
  CKFinder.setupCKEditor( editor );
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
