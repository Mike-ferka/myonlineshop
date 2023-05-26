<?php 
// Include the database configuration file  
require_once 'db_connect.php'; 




// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 

    
   // $sql_query=$db->query("INSERT INTO images(item_name,price)
   // VALUES ('$itemname','$price')");

    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $itemname=$_POST['itemname'];
            $price=$_POST['price'];
            // Insert image content into database 
            $insert = $db->query("INSERT into images_shirts(image,item_name,price,created) VALUES ('$imgContent','$itemname','$price', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                echo '<script>
                alert( "File uploaded sucessfully" ,
                );
                location.href="form_shirts.php";
                </script>';
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>