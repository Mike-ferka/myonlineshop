<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheFitsStore/Sneakers</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body >

    <nav>
    <img onclick="window.location.href='sneakers.php'" style="height: 100px; width:100px ; border:oldlace; border-radius:50%;" src="images/logo.jpg" alt="">
        <div class="navigation">
            <ul>
            <i id="menu-close" class="fas fa-times"></i>
                <li><a href="index.php">Home</a></li>
                <li><a href="#" class="active">Sneakers</a></li>
                <li><a href="classic.php">classic Shoes</a></li>
                <li><a href="birkenstock.php">Birkenstock</a></li>
                <li><a href="cloth.php">Cloths</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

            <img id="menu-btn" src="images/menu.png" alt="">
        </div>
    </nav>

    <section id="course">
<?php


// Include the database configuration file
require_once 'db_connect.php';

// Get image data from database
$result = $db->query("SELECT * FROM images ORDER BY id DESC");
?>
<?php if($result->num_rows > 0){ ?>
        <div class="course-box">
        <?php while($row = $result->fetch_assoc()){ ?>
            <div class="courses">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                <div class="details">
                    <h6><?php echo $row['item_name']; ?></h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>(239)</span>
                    </div>
                    <div class="pro-link ">
                        <a href="https://web.facebook.com/ferka.michael.1"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/0509913297"><i class="fa fa-whatsapp" style="font-size:15px"></i></a>
                        <?php echo"<a  href='Cart.php?id=$row[id]'><button type='button' class='btn btn-info'>Order</button></a>";?>
                    </div>
                </div>
                <div class="cost">
                $<?php echo $row['price']; ?>
                </div>
            </div>
            <?php } ?>
            <?php }else{ ?>
    <p class="status error">Image(s) not found...</p>
<?php } ?>

    </section>
    <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <a style="text-decoration: none;" href="sneakers.php"><li>Sneakers</li></a>
            <a style="text-decoration: none;" href="classic.php"><li>Classic Shoes</li></a>
            <a style="text-decoration: none;" href="birkenstock.php"><li>Birkenstock</li></a>
            <a style="text-decoration: none;"href="cloth.php"><li>Cloth</li></a>
        </div>
        <div class="footer-col">
            <h3>Sports</h3>
            <li>Running</li>
            <li>Basketball</li>
            <li>Outdoor</li>
            <li>Training</li>
        </div>
        <div class="footer-col">
            <h3>Support</h3>
            <a style="text-decoration: none;" style="text-decoration: none;" href="contact.html"><li>Contact Us</li></a>
        </div>
        <div class="footer-col">
            <h3>Follow Us</h3>
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
            <li><i class="fa fa-whatsapp" style="font-size:36px"></i></li>
        </div>

        <div class="copyright">
            <p>Copyright ©2022 All rights reserved | This template is made by Ferka Michael</p>
            <div class="pro-link">
            <a href="https://www.instagram.com/mike_ferka/"> <i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/michael-ferka-9a922b207/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3B%2BLnvV%2Bl8SFeir9isZPyjTw%3D%3D"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/Mike-ferka"><i style="font-size:18px" class="fa">&#xf09b;</i></a>
            </div>
        </div>
    </footer>

    <script>
        $("#menu-btn").click(function() {
            $("nav .navigation ul").addClass("active");
        });
        $("#menu-close").click(function() {
            $("nav .navigation ul").removeClass("active");
        });
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>