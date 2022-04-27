<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
<a href="add_course_cate.php" class="btn btn-primary">Add</a>
                  <h4 class="card-title">Course Category</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $sql="SELECT * FROM cource_categories";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $data['title']; ?></td>
                               <td>
                                 <div>
                                   <img src="images/category/<?php echo $data['imgs']; ?>" alt="" class="rounded avatar-sm">
                               </div>
                             </td>
                             <td>
                             <?php echo $data['notes']; ?>
                             </td>
                             <td>
                               <a href="action/category_action.php?cid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                              <a href="category_edit.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a>
                             </td>
                             </tr>
                             <?php
                       }
                    }
                    ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div> <!-- end col -->
  </div> <!-- end row -->
</div>
<?php include('footer.php'); ?>
