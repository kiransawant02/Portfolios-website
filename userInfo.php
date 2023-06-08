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
 <th>Email</th>
 <th>Username</th>
 </thead>
 <tbody>
 <?php
 include '../config/db.php';
 $Record = mysqli_query($conn, "SELECT * FROM `users`");
 $serial_count = 0;
 while ($row = mysqli_fetch_array($Record, MYSQLI_ASSOC)) {
 $serial_count += 1;
 ?>
 <tr>
 <td class='text-center'><?php echo $serial_count ?></td>
 <td class='text-center'><?php echo $row['name']; ?></td>
 <td class='text-center'><?php echo $row['email']; ?></td>
 <td class='text-center'><?php echo $row['username']; ?></td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
 </div>
 </div>
</div>
<?php
include './afooter.php';
?>
