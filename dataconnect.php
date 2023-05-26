<?php
$servername="localhost";
$username="root";
$password="";
$database_name="images";

// Connecting to the database

$conn=mysqli_connect($servername,$username,$password,$database_name);

// Now checking the connection

if (!$conn){
    die("Connection failed".mysqli_connect_error());
}

if (isset($_POST['save'])){

    $username= $_POST["username"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $whatssap=$_POST["whatssap"];
    $itemname=$_POST["itemname"];
    $quantity=$_POST["quantity"];
    $size=$_POST["size"];
    $color=$_POST["color"];
    $comment=$_POST["comment"];

    


    $sql_query="INSERT INTO cart_table(username,email,phone,whatssap,itemname,quantity,size,color,comment)
    VALUES ('$username','$email','$phone','$whatssap', '$itemname', '$quantity','$size','$color','$comment')";

    if (mysqli_query($conn,$sql_query)){
        echo '<script>
       alert( "Order submitted sucessfully " ,
         "You will be contacted");
        location.href="index.php";
        </script>';
    }

    else{
        echo "Error".$sql.mysqli_error($conn);
    }

    mysqli_close($conn);

}
?>