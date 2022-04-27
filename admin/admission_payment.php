<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Admission Request</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Sn</th>
                          <th>Course</th>
                          <th>Student Name</th>
                          <th>Parents Name</th>
                          <th>Contact No</th>
                          <th>Whatsapp No</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $c=1;
                    $sql="SELECT * FROM admission ORDER BY id DESC";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $c; ?></td>
                               <td><?php
                                $ct=$data['course']; 
                                $sq="SELECT * FROM course WHERE id=$ct";
                                $rt=mysqli_query($con,$sq);
                                if($rt==true){
                                    while($rr=mysqli_fetch_assoc($rt)){
                                        echo $rr['course_name'];
                                    }
                                }
                                ?></td>
                             <td>
                             <?php echo $data['fullname']; ?>
                             </td>
                            <td>
                             <?php echo $data['pname']; ?>
                             </td>
                             <td>
                             <?php echo $data['contactno']; ?>
                             </td>
                             <td><?php echo $data['whatsappno']; ?></td>
                            
                            <td><?php echo $data['status']; ?></td>
                             <td>
                              <a href="admission_view.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">View</a>
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
