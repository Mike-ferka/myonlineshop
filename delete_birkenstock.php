<?php 
if(isset($_GET["id"])){
$id=$_GET["id"];

$sername="localhost";
$username="root";
$password="";
$database="images";

$connection=new mysqli($sername,$username,$password,$database);

$sql="DELETE FROM images_birkenstock WHERE id=$id";
$connection->query($sql);


}
header("location:birkenstock_display.php");
exit;


?>