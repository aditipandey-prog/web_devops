<?php
include('config.php')
?>
<?php
$id=$_GET['ID'];
$sql= "SELECT * FROM `user` WHERE `ID`=$id";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$username=$row['USERNAME'];
$email=$row['EMAIL'];
$gender=$row['GENDER'];
$city=$row['CITY'];
?>
<?php
if(isset($_POST['update']))
{
    $username = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city']; 

    $sql = "UPDATE `user` SET USERNAME='$username', EMAIL='$email', GENDER='$gender', CITY='$city' WHERE ID='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?> 
<html>
<head>
    <title>Edit details</title>
</head>
<body>
<form method="POST" action="edit.php?ID=<?php echo "$id"?>">
            Name*:<input type="text" name="name" value=<?php echo "$username"?> required=""><br><br>
            Email*:<input type="email" name="email" value=<?php echo "$email"?> required="" ><br><br>
            City*:<select name="city">
            <option value="dehradun" <?php if($city=="dehradun") {echo "selected";}?>>dehradun</option>
            <option value="Mumbai" <?php if($city=="Mumbai") {echo "selected";}?> >Mumbai</option>
            <option value="Delhi" <?php if($city=="Delhi") {echo "selected";}?> >Delhi</option>
            <option value="Ahmedabad" <?php if($city=="Ahmedabad") {echo "selected";}?> >Ahmedabad</option>
            <option value="Pune" <?php if($city=="Pune") {echo "selected";}?>>Pune</option>
            <option value="Jaipur" <?php if($city=="Jaipur") {echo "selected";}?>>Jaipur</option>
            <option value="Lucknow" <?php if($city=="Lucknow") {echo "selected";}?>>Lucknow</option>
            <option value="Kanpur" <?php if($city=="Kanpur") {echo "selected";}?> >Kanpur</option>
            <option value="Meerut" <?php if($city=="Meerut") {echo "selected";}?> >Meerut</option>
            <option value="Amritsar" <?php if($city=="Amritsar") {echo "selected";}?> >Amritsar</option>
            </select><br><br>
        Gender*:<br>
        Male
        <input type="radio" id="male" name="gender" value="male" <?php if($gender=="male") {echo "checked";}?>><br>
        Female
        <input type="radio" id="female" name="gender" value="female" <?php if($gender=="female") {echo "checked";}?>><br>
        Other
        <input type="radio" id="other" name="gender" value="other" <?php if($gender=="other") {echo "checked";}?>><br>
       
        <input type="submit" name="update" value="Update">
</form>
</body>
</html>