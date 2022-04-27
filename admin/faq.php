<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <a href="add_faq.php" class="btn btn-info">Add</a>
                  <h4 class="card-title">Contact</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Sn</th>
                          <th>Question</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $c=1;
                    $sql="SELECT * FROM contact";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $c; ?></td>
                               <td><?php echo $data['question']; ?></td>
                             <td>
                               <a href="action/contact_action.php?gid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                              <a href="view_contact.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">View</a>
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
