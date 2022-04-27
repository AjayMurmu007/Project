<?php include('header.php');
include('../database/db.php');
?>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Course Payment Request</h4>
                  <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                      <thead>
                      <tr>
                          <th>Sn</th>
                          <th>Category</th>
                          <th>Course</th>
                          <th>Imgage</th>
                          <th>Duration</th>
                          <th>Price</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php
                    $c=1;
                    $sql="SELECT * FROM course_buy ORDER BY id DESC";
                    $run=mysqli_query($con,$sql);
                    if ($run==true) {
                       while ($data=mysqli_fetch_assoc($run)) {
                             ?>
                             <tr>
                               <td><?php echo $c; ?></td>
                               <td><?php
                                $ct=$data['course_cate']; 
                                $sq="SELECT * FROM cource_categories WHERE id=$ct";
                                $rt=mysqli_query($con,$sq);
                                if($rt==true){
                                    while($rr=mysqli_fetch_assoc($rt)){
                                        echo $rr['title'];
                                    }
                                }
                                ?></td>
                             <td>
                             <?php echo $data['course']; ?>
                             </td>
                             <td>
                                 <img src="images/course/<?php echo $data['img']; ?>" style="height:40px;width:40px"/>
                             </td>
                             <td><?php echo $data['duration']; ?></td>
                             <td><?php echo $data['price']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                             <td>
                              <a href="view_paydetail.php?cid=<?php echo $data['id']; ?>" class="btn btn-info">View</a>
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
