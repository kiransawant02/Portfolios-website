<?php
include './aheader.php';
?>
<div class="container">
 <div class="row ">
 <div>
 <table class="table table-dark border border-success ">
 <thead class="text-center">
 <th>ID</th>
 <th>Name</th>
 <th>UserInfo</th>
 <th>Category</th>
 <th>Image</th>
 <th>Another Image</th>
 </thead>
 <tbody>
 <?php
 include '../config/db.php';
 $Record = mysqli_query($conn, "SELECT * FROM `uprofile`");
 $serial_count = 0;
 while ($row = mysqli_fetch_array($Record, MYSQLI_ASSOC)) {
 $serial_count += 1;
 ?>
 <tr>
 <td class='text-center'><?php echo $serial_count ?></td>
 <td class='text-center'><?php echo $row['name1']; ?></td>
 <td class='text-center'><?php echo $row['userinfo']; ?></td>
 <td class='text-center'><?php echo $row['category']; ?></td>
 <td class='text-center'><img class="container" src="../<?php echo 
$row['img1']; ?>"></td>
 <td class='text-center'><img class="container" src="../<?php echo 
$row['img2']; ?>"></td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
 </div>
 </div>
</div>
</html>
<?php
include './afooter.php';
?>