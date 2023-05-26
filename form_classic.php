
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body{
    background-image: linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url("images/italian shoe.jpg");
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding-top: 40px;
    width: 100%;
    height: 100vh;
   } 
   h1{
       color:white;
   }
</style>
<body>
    <h1>CLASSIC SHOES UPLOAD PAGE</h1>
<form  style="margin-left: 100px; margin-top:100px;margin-right:100px;"  action="upload_classic.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    Item Name:<input type="text" name="itemname" id="1" required>
    Item Price:<input type="number" name="price" id="2" required>
    <input type="submit" name="submit" value="Upload">

    
</form>

</body>
</html>