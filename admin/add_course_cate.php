<?php include('header.php'); ?>
<div class="container-fluid">
    <!-- end row -->
    <div class="row">
      <div class="col-xl-3"></div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                  <a href="course_category.php" class="btn btn-info" style="float: right">Back</a>
                    <h4 class="card-title">Course Category</h4>
                       <form class="custom-validation" action="action/category_action.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                              <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" required placeholder="title" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="imgs" id="pass2" class="form-control" placeholder="image" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div>
                                <textarea  name="notes" class="form-control" rows="3"></textarea>
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
