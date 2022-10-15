<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>HOTEL WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="icon" href="logo.jpg" type="image/jpg" />
  </head>
  <body>
    <div class="topnav_container">
      <div class="col-md-5 col-sm-12" id="web_name">
        <span class="hr"
          ><a href="index.php" style="color: black; text-decoration: none"
            >Hotel Website</a
          ></span
        >
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="topnav" id="myTopnav">
          <a href="index.php">Home</a>
          <a href="service.php">Services</a>
          <a href="rooms.php">Rooms</a>
          <a href="customers.php">Customers</a>
          <a href="contact.php">Contact Us</a>
          <a href="checkout.php">Check Out</a>

          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <a href="login_form.php">Log In/ Sign Up</a>
          
        </div>
      </div>
    </div>
    <header class="header" id="header">
      <div class="head-top">
        <div class="col-md-12 col-sm-12">
          <div class="head-bottom flex" style="text-align : center;">
            <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
          </div>
          <div class="head-down" style="font-size: 100px; color: #ddd; text-align: center;">
            <h2>We are dedicated in making sure that your visit to Miami is memorable , comfortable and delightful .</h2>
          </div>
        </div>
    </header>

    <!--

    <div class="book">
      <form class="book-form">
        <div class="form-item">
          <label for="checkin-date">Check In Date</label>
          <input type="date" id="checkin-date" />
        </div>
        <div class="form-item">
          <label for="checkout-date">Check Out Date</label>
          <input type="date" id="checkout-date" />
        </div>
        <div class="form-item">
          <label for="adult">Adults: </label>
          <input type="number" min="1" value="1" id="adult" />
        </div>
        <div class="form-item">
          <label for="children">Children: </label>
          <input type="number" min="1" value="1" id="children" />
        </div>
        <div class="form-item">
          <label for="rooms">Rooms: </label>
          <input type="number" min="1" value="1" id="rooms" />
        </div>
        <div class="form-item">
          <input type="submit" class="btn" value="Book Now" />
        </div>
      </form>
    </div>
    -->

    
<div >

 
  <div class="container-fluid"><div class="col-sm-12"> <h2 class="title" style="font-size: 50px; position: absolute; ">Our Gallery</h2></div></div>
   <div class="container">
        <div class="box">
          <img src="dhong1.jpg" />
          <span>Swimming Pool</span>
        </div>
        <div class="box">
          <img src="dhong2.jpg" />
          <span>Restaurant</span>
        </div>
        <div class="box">
          <img src="dhong3.jpg" />
          <span>Food</span>
        </div>
        <div class="box">
          <img src="dhong4.jpg" />
          <span>Recieption</span>
        </div>
        <div class="box">
          <img src="dhong5.jpg" />
          <span>Rooftop</span>
        </div>
        <div class="box">
          <img src="dhong6.jpg" />
          <span>View</span>
        </div>
      
    </div>
  </div>

    <!--footer-->
    <footer class="footer" id="contactt">
      <div class="footer-container">
        <div style="text-align: center">
          <h2><u>About us</u></h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.
          </p>
          <ul class="social-icons">
            <li class="flex">
              <i class="fa fa-twitter fa-2x"></i>
            </li>
            <li class="flex">
              <i class="fa fa-facebook fa-2x"></i>
            </li>
            <li class="flex">
              <i class="fa fa-instagram fa-2x"></i>
            </li>
          </ul>
        </div>

        <div style="text-align: center">
          <h2><u>Useful Links</u></h2>
          <a href="#">Blog</a>
          <a href="rooms.php">Rooms</a>
          <a href="#">Subscription</a>
          <a href="#">Gift Card</a>
        </div>

        <div style="text-align: center">
          <h2><u>Privacy</u></h2>
          <a href="#">Career</a>
          <a href="#">About us</a>
          <a href="contact.php">Contact us</a>
          <a href="service.php">Services</a>
        </div>

        <div>
          <h2><u>Have a question?</u></h2>
          <div class="contact-item">
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            <span>
              203 Fake St.Mountain View, San Francisco, California,USA
            </span>
          </div>
          <div class="contact-item">
            <span>
              <i class="fas fa-phone-alt"></i>
            </span>
            <span> 01629450496 </span>
          </div>
          <div class="contact-item">
            <span>
              <i class="fas fa-envelope"></i>
            </span>
            <span> sumaiyakhatunsumu@gmail.com </span>
          </div>
        </div>
      </div>
    </footer>
    <!--footer shesh-->
    <script src="script.js"></script>
  </body>
</html>
