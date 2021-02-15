<?php
include('config.php')
?>
<?php
 // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['city'];
$gender=$_POST['gender'];

$query = "INSERT INTO `user` (`USERNAME`,`EMAIL`,`GENDER`,`CITY`) values ('$name', '$email', '$gender', '$address')";
mysqli_query($conn, $query);

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
        Gender*:
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
         <label for="other">Other</label>
        
       </p>
       
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <form action="searchbyname.php" method="post">
    <input type="submit" name="search" value="CLICK HERE TO SEARCH RECORD">
    </form>
    <form action="details.php" method="post">
    <input type="submit" name="display" value="Display tables"></form>
</body>
</html>