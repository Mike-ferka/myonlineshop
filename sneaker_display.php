<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body   style="margin:50px;">


   

    <br>
    <h2>DashBoard</h2>
    <br>
<table class="table">
<thead>
    <tr>
      <th>Item Name</th>  
      <th>Price</th>
      <th>Date</th>
      

    </tr>
</thead>
<tbody>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="images";

// Connecting to the database

$connection= new mysqli($servername,$username,$password,$database_name);
// checking connection
if ($connection->connect_error){
    die("Connection failed:".$connection->connect_error);
}

$sql="SELECT * FROM images";
$result=$connection->query($sql);

if (!$result){
    die("Invalid query:".$connection->error);
}

//Read data of each row
while($row=$result->fetch_assoc())
{
    echo"
    <tr>
    
    <td>" . $row ["item_name"]."</td>
    <td>" . $row ["price"]."</td>
    <td> ". $row ["created"]."</td>
   
    <td>
    <a class='btn btn-danger btn-sm'  href='delete_sneaker.php?id=$row[id]'>Delete</a>
    </td>
    </tr>
   ";
}
   ?>
</tbody>
</table>

    

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

</html>