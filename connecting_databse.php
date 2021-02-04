<?php
include('config.php')
?>
<?php
 // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['city'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$query = "INSERT INTO `user` (`USERNAME`,`EMAIL`,`GENDER`,`CITY`) values ('$name', '$email', '$gender', '$address')";
mysqli_query($conn, $query);
$query2="INSERT INTO `student_details` (`USERNAME`,`BRANCH`,`YEAR`) values ('$name', '$branch', '$year')";
mysqli_query($conn, $query2);


}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title> 
</head>
<body>
    <p>Please fill this form.</p>
    <form action="" method="post">
        <p>
            <label for="iname">Name*:</label>
            <input type="text" name="name" id="iname" required="">
        </p>
        <p>
            <label for="iemail">Email*:</label>
            <input type="email" name="email" id="iemail" required="" >
        </p>
        <p>
            <label for="icontact">Contact*:</label>
            <input type="text" name="contact" id="icontact" required="" maxlength="10">
        </p>
        <p>
            <label for="icity">City*:<sup>*</sup></label>
            <select id="icity" name="city">
            <option value="dehradun">deharadu</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Pune">Pune</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Meerut">Meerut</option>
            <option value="Amritsar">Amritsar</option>

          </select>
        </p>
        <p>
        <label for="ibranch">Branch*:</label>
            <input type="text" name="branch" id="ibranch" required="">
        </p>
        <p>
        Gender*:
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
         <label for="other">Other</label>
        
       </p>
       <p>
       <label for="iyear">Year*:</label>
            <input type="text" name="year" id="iyear" required="">
        </p>
       
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <div class="container">

<table id="tab">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>City</th>
        <th>Branch</th>
        <th>Year</th>
    </tr>
    <tr class="row1">
        <td><?php 
            if(isset($_POST['name'])){
                echo $_POST['name'];
            }
             ?>
        </td>
        <td><?php 
            if(isset($_POST['email'])){
                echo $_POST['email'];
            }
             ?>
        </td>
        <td><?php 
            if(isset($_POST['city'])){
                echo $_POST['city'];
            }
             ?>
        </td>
        <td><?php 
            if(isset($_POST['branch'])){
                echo $_POST['branch'];
            }
             ?>
        </td>
        <td><?php 
            if(isset($_POST['year'])){
                echo $_POST['year'];
            }
             ?>
        </td>
    </tr>
</table>
</div>
    <form action="searchdata.php" method="post">
    <input type="submit" name="search" value="CLICK HERE TO SEARCH RECORD">
    </form>
</body>
</html>