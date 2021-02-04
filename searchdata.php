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
<body>
    <div class="container">
    <form action="" method="POST">
    <input type=" text" name="username" placeholder="enter name to be searched">
    <input type="submit" name="submit" value="SEARCH BY NAME">
    </form>
    <table>
      <tr>
      <th>Username</th>
      <th>Email</th>
      <th>City</th>
      <th>Branch</th>
      <th>Year</th>
      </tr>
      <?php
      if(isset($_POST['submit']))
      {
          $USERNAME=$_POST['username'];
          $query="SELECT user.USERNAME,user.EMAIL,user.CITY,student_details.BRANCH,student_details.YEAR FROM `student_details`,`user` WHERE user.USERNAME='$USERNAME' and student_details.USERNAME='$USERNAME'";
          $run=mysqli_query($conn,$query);
          
          while($row=mysqli_fetch_array($run))
          { 
               ?>
               <tr>
                <td><?php echo $row['USERNAME'];?></td>
                <td><?php echo $row['EMAIL'];?></td>
                <td><?php echo $row['CITY'];?></td>
                <td><?php echo $row['BRANCH'];?></td>
                <td><?php echo $row['YEAR'];?></td>
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