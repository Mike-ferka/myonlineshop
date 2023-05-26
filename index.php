<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheFitsStore</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

    <nav>
        <img onclick="window.location.href='index.php'" style="height: 100px; width:100px ; border:oldlace; border-radius:50%;" src="images/logo.jpg" alt="">
        <div class="navigation">
            <ul>
                <i id="menu-close" class="fas fa-times"></i>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="sneakers.php">Sneakers</a></li>
                <li><a href="classic.php">classic Shoes</a></li>
                <li><a href="birkenstock.php">Birkenstock</a></li>
                <li><div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div></li>
                <li><a href="contact.html">Contact</a></li>

            </ul>
            <img id="menu-btn" src="images/menu.png" alt="">
        </div>
    </nav>

    <section id="home">
        <h2>Welcome To WestWorld Store</h2>
        <p>Buy Quality And Affordable Wears</p>
        <div class="btn">
            <a class="blue" href="men.php">Men</a>
            <a class="yellow" href="women.php">Women</a>
        </div>
    </section>


    <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <a style="text-decoration: none;" href="sneakers.php"><li>Sneakers</li></a>
            <a style="text-decoration: none;"href="classic.php"><li>Classic Shoes</li></a>
            <a style="text-decoration: none;" href="birkenstock.php"><li>Birkenstock</li></a>
            <a style="text-decoration: none;" href="cloth.php"><li>Cloth</li></a>
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
            <a style="text-decoration: none;" href="contact.html"><li>Contact Us</li></a>
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
            <a  href="https://www.instagram.com/mike_ferka/"> <i class="fab fa-instagram"></i></a>
                <a  href="https://www.linkedin.com/in/michael-ferka-9a922b207/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3B%2BLnvV%2Bl8SFeir9isZPyjTw%3D%3D"><i class="fab fa-linkedin-in"></i></a>
                <a  href="https://github.com/Mike-ferka"><i style="font-size:18px" class="fa">&#xf09b;</i></a>
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
    <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>

</body>

</html>