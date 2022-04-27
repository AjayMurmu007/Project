<div>
<?php 
include('database/db.php');
$category=$_POST['category'];
$sql="SELECT * FROM course WHERE id=$category";
$run=mysqli_query($con,$sql);
if($run==true){
    while($row=mysqli_fetch_assoc($run)){
        ?>
        <input type="text" name="duration" value="<?php echo $row['duration']; ?>" readonly/>
        <input type="text" name="price" value="<?php echo $row['price']; ?>" readonly/>
        <?php
    }
}
?>
</div>