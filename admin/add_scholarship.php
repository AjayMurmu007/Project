<?php include('header.php');
include('../database/db.php');
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
                              <label class="form-label">Scholarship Title</label>
                              <input type="test" name="scholoartitle" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Scholarship Fee</label>
                                <div>
                                    <input type="text" name="fee" id="fee" class="form-control" />
                                </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="imgs" class="form-control" placeholder="image" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Video Url</label>
                            <div>
                                <input type="url" name="url" id="url" class="form-control" placeholder="Video url" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <div>
                                <input type="date" name="date" id="date" class="form-control" placeholder="date" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Long Description</label>
                            <div>
                                <textarea id="editor"  name="lnotes" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Short Description</label>
                            <div>
                                <textarea id="editor2"  name="snotes" class="form-control" rows="3"></textarea>
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
