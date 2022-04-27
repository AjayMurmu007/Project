<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Enquiry</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Contact Number</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $sql="SELECT * FROM enquiry ORDER BY id DESC";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $data['date1']; ?></td>
                               <td><?php echo $data['name']; ?></td>
                               <td>
                                 <?php echo $data['mobile']; ?>
                             </td>
                             <td>
                               <a href="action/enquiry_delete.php?cid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                              <a href="enquiry_view.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">View</a>
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
