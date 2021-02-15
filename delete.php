<?php
include('config.php')
?>
<?php
$id= $_GET['ID'];
$sql="DELETE FROM `user` where id=$id";
if(mysqli_query($conn,$sql)){
    header("Location:details.php");

}
else{
    echo "deletion failed..";
}

?>