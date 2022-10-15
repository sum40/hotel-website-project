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
        font-family: Arial, Helvetica, sans-serif;
        background-color: #ffffe6;
      }
      :root {
        --transition: all 0.7s ease;
        --yellow: #f9d342;
        --dark: #292826;
      }
      * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: "playfair Display", serif;
      }
      /****/
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
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
      /*......*/

      html {
        scroll-behavior: smooth;
      }

      body {
        line-height: 1.6;
      }

      .btn {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        padding: 10px;
        width: 140px;
        display: block;
        margin: 15px auto;
        cursor: pointer;
        transition: var(--transition);
        color: #292826;
      }

      .btn:hover {
        opacity: 0.7;
        scale: 1.02;
      }

      .flex {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      /*****/
      input[type="text"],
      select,
      textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }

      input[type="submit"] {
        background-color: #666600;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #cc9900;
      }

      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
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
    <h3 style="text-align: center">Contact Form</h3>

    <div class="container-fluid">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Your name.."
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name.."
        />

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Bangladesh</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea
          id="subject"
          name="subject"
          placeholder="Write something.."
          style="height: 200px"
        ></textarea>

        <input type="submit" value="Submit" />
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
