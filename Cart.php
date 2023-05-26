<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>



    <section id="contact">
        <div class="getin">
            <h2>contact us</h2>
            <p>Looking for help? Fill the form and start a new adventure.</p>

            <div class="getin-details">
                <h3>Headquaters</h3>
                <div>
                    <i class="far fa-home get"></i>
                    <p>744 New York Ave, Brooklyn, Kings, New York 10224</p>
                </div>
                <h3>Phone</h3>
                <div>
                    <i class="fas fa-phone-alt get"></i>
                    <p>(+642) 245 356 432 <br> (+420) 336 476 328</p>
                </div>
            </div>
            <h3>Follow Us</h3>
            <div class="pro-link">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        </div>



?>
        <?php
        if(isset($_GET["id"])){
            $id=$_GET["id"];

	// Connect to database
	$con = mysqli_connect("localhost","root","","images");


	// Get all the categories from category table
    //$sql="DELETE FROM images_classic WHERE id=$id";
	$sql = "SELECT* FROM `images` WHERE id=$id";
	$all_categories = mysqli_query($con,$sql);

}
?>


       <form name="contactForm" onsubmit="return validate()" class="form" action="dataconnect.php" method="POST">
       <div  >
                <h2>Ordering form</h2>.</p>
            <div class=" form-row ">
                <input type="text" placeholder="Your Name "name="username" autocomplete="off" id="name"required>
                <span class="errors"></span><br>
                <input type="text" placeholder="Your Email " name="email" autocomplete="off" id="email"required>
                <span class="errors"></span><br>
            </div>
            <div class="form-row ">
                <input type="tel" placeholder="phone number" name="phone"autocomplete="off" id="phone"required>
                <span class="errors"></span><br>
                <input type="tel" placeholder="whatssap number" name="whatssap"autocomplete="off" id="phone"required>
                <span class="errors"></span><br>
            </div>
            <div class="form-col ">
            <label>Item Name</label>
		<input type="text" name="itemname" id="itemname"required

			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($images = mysqli_fetch_array(
						$all_categories,MYSQLI_ASSOC)):;
			?>
				value="<?php echo $images["item_name"];
					// The value we usually set is the primary key
				?>">

			<?php
				endwhile;
				// While loop must be terminated
			?>
            <span class="errors"></span><br>


                <input type="number" placeholder="Quantity " name="quantity"autocomplete="off" id="quantity"required>
                <span class="errors"></span><br>
            </div>
            <div class="form-row ">
                <input type="number" placeholder="size " name="size"autocomplete="off" id="size"required>
                <input type="text" placeholder="color " name="color"autocomplete="off" id="color"required>
                <!--<select type="text " placeholder="color " name="color"autocomplete="off" required>
                                        <option>Select Color</option>
                                        <option value="Red">Red</option>
                                        <option value="Black">Black</option>
                                        <option value="Green">Green</option>
                                       </select>-->
                                       <span class="errors"></span><br>
            </div>
            <div class="form-col ">
                <textarea name="comment" cols="30 " rows="8 " placeholder="Address" id="address" required></textarea>
                <span class="errors"></span><br>
            </div>
            <div class="form-col ">
                <button onclick="doSubmit()"><input type="submit"name="save"></button>
            </div>
        </div>
       </form>
       <!-- <div class="form-container">
        <h1>Contact Form</h1>
        <form name="contactForm" method="post" onsubmit="return validate();" action="#">
            <label for="name">* Name</label>
            <input type="text" id="name" name="name" placeholder="Your name">
            <span class="errors"></span><br>

            <label for="email">* Email</label>
            <input type="text" placeholder="Email address" id="email" name="email">
            <span class="errors"></span><br>

            <label for="phone">* Phone</label>
            <input type="text" placeholder="Phone number" id="phone" name="phone">
            <span class="errors"></span><br>

            <label for="subject">* Message</label>
            <textarea placeholder="Your message" cols="132" rows="5" name="subject" id="subject"></textarea>
            <span class="errors"></span><br>

            <button type="submit" onclick="return doSubmit();" value="Submit">Submit</button>
        </form>
    </div>-->

    </section>

    <script>
        var validate = function(e) {
            var fields = document.querySelectorAll('.form textarea, .form input[type="text"],.form input[type="number"],.form input[type="tel"]');
            var regEx;
            var removeSpan;
            var par;
            var check = false;
            var val;
            var errArr = [];

            for (var i = 0; i < fields.length; i++) {
                if (fields[i].value === "") {

                    if (fields[i].nextElementSibling.classList.contains('error')) {
                        removeSpan = fields[i].nextElementSibling;
                        par = fields[i].parentNode;
                        par.removeChild(removeSpan);
                        fields[i].nextElementSibling.innerHTML = fields[i].placeholder + " is required?";
                        fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                        check = false;
                        errArr.push(fields[i]);
                    }
                    fields[i].nextElementSibling.innerHTML = fields[i].placeholder + " is required?";
                    fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                    check = false;
                    errArr.push(fields[i]);
                } else {

                    if (fields[i].id === 'phone') {
                        val = isValidPhone(fields[i]);
                        if (val === false) {
                            fields[i].nextElementSibling.innerHTML = "Hmmm! Your phone number is not valid?";
                            fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                            check = false;
                            errArr.push(fields[i]);
                        } else {
                            fields[i].nextElementSibling.innerHTML = "";
                            fields[i].style.boxShadow = "none";
                            check = true;
                        }
                    }

                    if (fields[i].id === 'email') {
                        val = isValidEmail(fields[i]);
                        if (val === false) {
                            fields[i].nextElementSibling.innerHTML = "Hmmm! Your email address is not valid?";
                            fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                            check = false;
                            errArr.push(fields[i]);
                        } else {
                            fields[i].nextElementSibling.innerHTML = "";
                            fields[i].style.boxShadow = "none";
                            check = true;
                        }
                    }
                      // check if message and name values contain valid characters.
                      if (fields[i].id !== 'email' && fields[i].id !== 'phone'&& fields[i].id !== 'size'&& fields[i].id !== 'quantity'&& fields[i].id !== 'address') {
                        val = isValidChar(fields[i]);
                        if (val === false) {
                            fields[i].nextElementSibling.innerHTML = "Are you trying to HACK ME!";
                            fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                            check = false;
                            errArr.push(fields[i]);
                        } else {
                            fields[i].nextElementSibling.innerHTML = "";
                            fields[i].style.boxShadow = "none";
                            check = true;
                        }
                    }
                }
            }

            return check

            if (check === false) {
                var count = 0;
                var toErr = setInterval(function() {
                    var e = errArr[0].offsetTop + -25;
                    var pos = Math.abs(e);
                    if (count < pos) {
                        count++;
                        window.scrollTo(0, count);
                    } else {
                        clearInterval(toErr);
                    }
                }, 1);
            }



            // Helper functions.
            function isValidEmail(e) {
                regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var email = e.value;
                if (!regEx.test(email)) {
                    return false;
                }
            }

            function isValidChar(e) {
                regEx = /^[a-zA-Z@#$%!?^&*()_+\-=\[\]{};':"\\|,.\/? ]*$/;
                var value = e.value;
                if (!regEx.test(value)) {
                    return false;
                }
            }

            function isValidPhone(e) {
                regEx = /^[+]?[(]?[+]?\d{2,4}[)]?[-\s]?\d{2,8}[-\s]?\d{2,8}$/;
                var value = e.value;
                if (!regEx.test(value)) {
                    return false;
                }
            }
        };







        function doSubmit() {
            if (validate()) document.contactForm.submit();
        }
    </script>

    <script>
        $("#menu-btn ").click(function() {
            $("nav .navigation ul ").addClass("active ");
        });
        $("#menu-close ").click(function() {
            $("nav .navigation ul ").removeClass("active ");
        });
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
</body>

</html>