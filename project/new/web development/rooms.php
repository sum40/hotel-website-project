<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Rooms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="main.css" />
    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"
  ></script>
  <style>
    .room_topnav {
  overflow: hidden;

}

.room_topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}

.room_topnav a:hover {
  background-color: #ddd;
  color: black;
}

  </style>
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
          <a href="rooms.php">Rooms </a>
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

    <div class="room_topnav">
      <div class="container-fluid" style="background-color: black;">
        <div class="col-md-3 col-sm-3"><a href="#single">Single Bed Rooms</a></div>
        <div class="col-md-3 col-sm-3"><a href="#double">Double Bed Rooms</a></div>
        <div class="col-md-3 col-sm-3"><a href="#luxury">Luxury Rooms</a></div>
        <div class="col-md-3 col-sm-3"><a href="#premium">Premium Rooms</a></div>
    </div>

    <section class="rooms sec-width" id="rooms">
      <div class="title">
        <h2 style="font-size: 50px;">Rooms</h2>
      </div>
      <div class="rooms-container">
        <!--single room-->
        <article class="room" id="single">
          <div class="room-image">
            <img src="img 1.jpg" alt="room image" />
          </div>
          <div class="room-text">
            <h3>Single Bed Rooms</h3>
            <ul>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 1
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 2
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 3
              </li>
            </ul>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>

            <p class="rate"><span>$30.00/</span>Per Night</p>
            <a href="checkout.php"><button type="button" class="btn">Book Now</button></a>
          </div>
        </article>
        <!--single room khatam-->
        <!--single room-->
        <article class="room" id="double">
          <div class="room-image">
            <img src="img 2.jpg" alt="room image" />
          </div>
          <div class="room-text">
            <h3>Double Bed Rooms</h3>
            <ul>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 1
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 2
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 3
              </li>
            </ul>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>

            <p class="rate"><span>$50.00/</span>Per Night</p>
            <a href="checkout.php"><button type="button" class="btn">Book Now</button></a>
          </div>
        </article>
        <!--single room khatam-->
        <!--single room-->
        <article class="room" id="luxury">
          <div class="room-image">
            <img src="img 3.png" alt="room image" />
          </div>
          <div class="room-text">
            <h3>Luxury Rooms</h3>
            <ul>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 1
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 2
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 3
              </li>
            </ul>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>

            <p class="rate"><span>$100.00/</span>Per Night</p>
            <a href="checkout.php"><button type="button" class="btn">Book Now</button></a>
          </div>
        </article>
        <!--single room khatam-->
        <!--single room-->
        <article class="room" id="premium">
          <div class="room-image">
            <img src="luxury.jpg" alt="room image" />
          </div>

          <div class="room-text">
            <h3>Premium Rooms</h3>
            <ul>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 1
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 2
              </li>
              <li>
                <i class="fas fa-arrow-alt-circle-right"> </i>
                Room type 3
              </li>
            </ul>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>

            <p class="rate"><span>$200.00/</span>Per Night</p>
            <a href="checkout.php"><button type="button" class="btn">Book Now</button></a>
          </div>
        </article>
        <!--single room khatam-->
      </div>
    </section>

  

    <script src="script.js"></script>
  </body>
</html>
