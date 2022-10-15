<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>HOTEL WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
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
    <style>
      body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
        color: black;
        background-color: #ffffe6;
      }

      :root {
        --transition: all 0.7s ease;
        --yellow: #f9d342;
        --dark: #292826;
      }

      * {
        box-sizing: border-box;
      }
      .topnav_container {
        overflow: hidden;
        width: 100%;
        padding: 10px 10px;
        background-color: #ffecb3;
      }
      .hr {
        font-size: 30px;
        color: black;
        text-align: center;
        padding: 0px 50px;
        line-height: 52px;
      }
      .topnav {
        overflow: hidden;
      }
      .login {
        overflow: hidden;
        padding: 1px 1px;
        border: 1px solid transparent;
        border-radius: 25px;
      }

      .topnav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .topnav a:hover {
        background-color: var(--yellow);
        color: black;
      }

      .topnav .icon {
        display: none;
      }
      .login a {
        text-align: center;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 1px 1px;
        text-decoration: none;
        font-size: 20px;
        color: #333;
      }

      @media screen and (max-width: 991px) {
        .topnav a {
          display: none;
        }
        .topnav a.icon {
          float: right;
          display: block;
        }
        #web_name {
          text-align: center;
        }
      }
      @media screen and (max-width: 991px) {
        .topnav.responsive {
          position: relative;
        }
        .topnav.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: center;
        }
        .login.responsive a {
          float: none;
          display: block;
          text-align: center;
        }
      }
      .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
      }

      .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
      }

      .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
      }

      .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
      }

      .col-25,
      .col-50,
      .col-75 {
        padding: 0 16px;
      }
      .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
      }

      input[type="text"] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      label {
        margin-bottom: 10px;
        display: block;
      }

      .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
      }

      .btn {
        background-color: #666600;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
      }

      .btn:hover {
        background-color: #cc9900;
      }

      a {
        color: #2196f3;
      }

      hr {
        border: 1px solid lightgrey;
      }

      span.price {
        float: right;
        color: grey;
      }

      @media (max-width: 800px) {
        .row {
          flex-direction: column-reverse;
        }
        .col-25 {
          margin-bottom: 20px;
        }
      }
    </style>
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

    <div style="display: flex; padding: 50px 180px; align-items: center">
      <div class="row">
        <div class="col-75">
          <div class="container-fluid">
            <h2 style="text-align: center">Checkout Form</h2>
            <div>
              <form action="/action_page.php">
                <div class="row">
                  <div class="col-50">
                    <h3>Billing Address</h3>
                    <label for="fname"
                      ><i class="fa fa-user"></i> Full Name</label
                    >
                    <input
                      type="text"
                      id="fname"
                      name="firstname"
                      placeholder="John M. Doe"
                    />
                    <label for="email"
                      ><i class="fa fa-envelope"></i> Email</label
                    >
                    <input
                      type="text"
                      id="email"
                      name="email"
                      placeholder="john@example.com"
                    />
                    <label for="adr"
                      ><i class="fa fa-address-card-o"></i> Address</label
                    >
                    <input
                      type="text"
                      id="adr"
                      name="address"
                      placeholder="542 W. 15th Street"
                    />
                    <label for="city"
                      ><i class="fa fa-institution"></i> City</label
                    >
                    <input
                      type="text"
                      id="city"
                      name="city"
                      placeholder="New York"
                    />

                    <div class="row">
                      <div class="col-50">
                        <label for="state">State</label>
                        <input
                          type="text"
                          id="state"
                          name="state"
                          placeholder="NY"
                        />
                      </div>
                      <div class="col-50">
                        <label for="zip">Zip</label>
                        <input
                          type="text"
                          id="zip"
                          name="zip"
                          placeholder="10001"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="col-50">
                    <h3>Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                      <i class="fa fa-cc-visa" style="color: navy"></i>
                      <i class="fa fa-cc-amex" style="color: blue"></i>
                      <i class="fa fa-cc-mastercard" style="color: red"></i>
                      <i class="fa fa-cc-discover" style="color: orange"></i>
                    </div>
                    <label for="cname">Name on Card</label>
                    <input
                      type="text"
                      id="cname"
                      name="cardname"
                      placeholder="John More Doe"
                    />
                    <label for="ccnum">Credit card number</label>
                    <input
                      type="text"
                      id="ccnum"
                      name="cardnumber"
                      placeholder="1111-2222-3333-4444"
                    />
                    <label for="expmonth">Exp Month</label>
                    <input
                      type="text"
                      id="expmonth"
                      name="expmonth"
                      placeholder="September"
                    />
                    <div class="row">
                      <div class="col-50">
                        <label for="expyear">Exp Year</label>
                        <input
                          type="text"
                          id="expyear"
                          name="expyear"
                          placeholder="2018"
                        />
                      </div>
                      <div class="col-50">
                        <label for="cvv">CVV</label>
                        <input
                          type="text"
                          id="cvv"
                          name="cvv"
                          placeholder="352"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <label>
                  <input type="checkbox" checked="checked" name="sameadr" />
                  Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn" />
              </form>
            </div>
          </div>
          <div class="col-25">
            <div class="container">
              <h4>
                Rooms
                <span class="price" style="color: black"
                  ><i class="fa fa-shopping-cart"></i> <b>4</b></span
                >
              </h4>
              <p>
                <a href="#">Single Bed Room</a>
                <span class="price">$30</span>
              </p>
              <p>
                <a href="#">Double Bed Room</a> <span class="price">$50</span>
              </p>
              <p><a href="#">Luxury Room</a> <span class="price">$100</span></p>
              <p>
                <a href="#">Premium Room</a> <span class="price">$200</span>
              </p>
              <hr />
              <p>
                Total
                <span class="price" style="color: black"><b>$380</b></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <header class="header" id="header"></header>

    <script src="script.js"></script>
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
