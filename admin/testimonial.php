<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                 <a href="add_testimonial.php" class="btn btn-primary">Add</a>
                  <h4 class="card-title">Testimonial</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>SN</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $c=1;
                    $sql="SELECT * FROM testimonial";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $c; ?></td>
                               <td><?php echo $data['name']; ?></td>
                               <td>
                                 <div>
                                   <img src="images/testimonial/<?php echo $data['imgs']; ?>" alt="" class="rounded avatar-sm">
                               </div>
                             </td>
                             <td>
                               <a href="action/testimonial_action.php?tid=<?php echo $data['id']; ?>&message=delete" class="btn btn-danger">Delete</a>
                              <a href="update_tesimonial.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a>
                             </td>
                             </tr>
                             <?php
                             $c++;
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
