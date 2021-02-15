<?php
include('config.php')
?>
<?php
 $sql="SELECT * FROM `user`";
 $result=mysqli_query($conn,$sql);
 if( $result->num_rows>0)
 {?>
 
 <script>
function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}
</script>
     <table border="1px">
      <tr>
      <th>Username</th>
      <th>Email</th>
      <th>City</th>
      <th>Gender</th>
      <th>Edit</th>
      <th>Delete</th>
      </tr>
      <?php while($row=$result->fetch_assoc())
          { ?>
      <tr>
                <td><?php echo $row['USERNAME']?></td>
                <td><?php echo $row['EMAIL']?></td>
                <td><?php echo $row['CITY']?></td>
                <td><?php echo $row['GENDER']?></td>
                <td><a href="edit.php?ID=<?php echo $row['ID']?>">
                <input type="button" value="Edit"></a></td>
                <td><a href="delete.php?ID=<?php echo $row['ID']?>">
                <input type="button" value="delete" Onclick="return ConfirmDelete()"></a></td>
               </tr>
        <?php }?>
  </table>
  <?php }?> 
  