<?php
include('configuration.php')
?>
<html>
<head>

<body>
    <!--<form action="" method="POST">
    <input type=" text" name="id" placeholder="enter id to be searched">
    <input type="submit" name="submit" value="SEARCH BY ID">
    </form>-->
    
      <?php
      //if(isset($_POST['submit']))
      //{
          //$id=$_POST['id'];
          $query="SELECT * FROM `users` WHERE users.id='6'";
          $run=mysqli_query($conn,$query);
          while($row=mysqli_fetch_array($run))
          { 
              ?>
              
              
    <ol>
      <li>details of student id=<?php echo '$id'?></li>
        <ul>
               <li>Name:<?php echo $row['name'];?></li>
               <li>Email:<?php echo $row['email'];?></li>
            <li>City:<?php echo $row['city'];?></li>
            <li>Gender:<?php echo $row['gender'];?></li>
              <li>city:<?php echo $row['city'];?></li>
        </ul>
               <?php

          }
    //  }
      ?>
      
      </ol>
</body>
</head>
</html>