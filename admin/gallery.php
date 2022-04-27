<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                 <a href="add_gallery.php" class="btn btn-primary">Add</a>
                  <h4 class="card-title">Gallery</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Sn</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Date</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $c=1;
                    $sql="SELECT * FROM gallery";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $c; ?></td>
                               <td><?php echo $data['name']; ?></td>
                               <td>
                                 <div>
                                   <img src="images/gallery/<?php echo $data['imgs']; ?>" alt="" class="rounded avatar-sm">
                               </div>
                             </td>
                             <td>
                             <?php echo $data['date1']; ?>
                             </td>
                             <td>
                               <a href="action/gallery_action.php?gid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                              <a href="edit_gallery.php?gid=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a>
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
