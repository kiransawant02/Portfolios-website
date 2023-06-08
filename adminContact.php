<?php
include './aheader.php';
?>
<div class="container">
 <div class="row ">
 <div>
 <table class="table table-dark border border-success ">
 <thead class="text-center">
 <th>Id</th>
 <th>name</th>
 <th>email</th>
 <th>Message</th>
 </thead>
 <tbody>
 <?php
 include '../config/db.php';
 $Record = mysqli_query($conn, "SELECT * FROM `contact`");
 $serial_count = 0;
 while ($row = mysqli_fetch_array($Record, MYSQLI_ASSOC)) {
 $serial_count += 1;
 ?>
 <tr>
 <td class='text-center'><?php echo $serial_count ?></td>
 <td class='text-center'><?php echo $row['cname']; ?></td>
 <td class='text-center'><?php echo $row['cemail']; ?></td>
 <td class='text-center'><?php echo $row['contactus']; ?></td>
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