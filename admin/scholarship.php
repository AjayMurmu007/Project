<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                 <a href="add_scholarship.php" class="btn btn-primary">Add</a>
                  <h4 class="card-title">Scholarship Details</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Title</th>
                          <th>Fee</th>
                          <th>Image</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $sql="SELECT * FROM scholorship";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $data['title']; ?></td>
                               <td><?php echo $data['fee']; ?></td>
                               <td>
                                 <div>
                                   <img src="images/scholarship/<?php echo $data['imgs']; ?>" alt="" class="rounded avatar-sm">
                               </div>
                             </td>
                             <td>
                               <a href="action/scholoarship_action.php?cid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                              <a href="edit_scholorship.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a>
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
