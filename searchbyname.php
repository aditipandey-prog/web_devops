<?php
include('config.php')
?>
<html>
<head>
<style>
table,td,th{
 border :2px solid black;
 width:1000px;

}
</style>
<script>
function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}
</script>
<body>
    <div class="container">
    <form action="searchbyname.php" method="POST">
    <input type=" text" name="username" placeholder="enter name to be searched">
    <input type="submit" name="submit" value="SEARCH BY NAME">
    </form>
    <table>
      <tr>
      <th>Username</th>
      <th>Email</th>
      <th>City</th>
      <th>Gender</th>
      <th>Edit</th>
      <th>Delete</th>
      </tr>
      <?php
      if(isset($_POST['submit']))
      {
          $USERNAME=$_POST['username'];
          $query="SELECT * FROM `user` WHERE USERNAME='$USERNAME'";
          $run=mysqli_query($conn,$query);
          
          while($row=$run->fetch_assoc())
          { 
               ?>
               <tr>
                <td><?php echo $row['USERNAME'];?></td>
                <td><?php echo $row['EMAIL'];?></td>
                <td><?php echo $row['CITY'];?></td>
                <td><?php echo $row['GENDER'];?></td>
                <td><a href="edit.php?ID=<?php echo $row['ID']?>">
                <input type="button" value="Edit"></a></td>
                <td><a href="delete.php?ID=<?php echo $row['ID']?>">
                <input type="button" value="delete" Onclick="return ConfirmDelete()"></a></td>
               </tr>
               <?php

          }
      }
      ?>
      
    </table>
    </div>
</body>
</head>
</html>