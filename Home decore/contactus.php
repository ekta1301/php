<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
  </head>
  <body>
    <header>
      <div class="home">
          <div class="row">
              <table>
                  <tr>
                      <td><img class="header-logo" src="images/logo1.png"></td>

                      <td>
                          <div class="header-nav">
                          <nav>
                              <a href="index.php">Home</a>
                              <a href="bedroom.php">Bedroom</a>
                              <a href="kitchen.php">Kitchen</a>
                              <a href="hall.php">Hall</a>
                              <a href="contactus.php" class="active">Contact Us</a>
                          </nav>
                          </div>
                      </td>
                  </tr>
              </table>
          </div>
      </div>
    </header>
      <section class="c">
        <div class="subc">
          <h2>Contact us</h2>
          <p>Home decor is a company that helps people in decoration of their home with suggestions and ideas at free of cost.<br>Contact us for more help</p>
        </div>
        <div class="c1">
          <div class="subc1">
            <div class="box">
              <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                  <h3>Address</h3>
                  <p>12 Bharar nagar,<br>Sanala road,Morbi<br>363641</p>
                </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                  <h3>Phone</h3>
                  <p>123-456-7890</p>
                </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                  <h3>Email</h3>
                  <p>homedecor123@gmail.com</p>
                </div>
            </div>
          </div>
            <div class ="form">
              <form action="#" method="get">
                <h2>Send Message</h2>
                <div class="inputbox">
                  <input id="name" type="text" name="name" required="required" oninvalid="this.setCustomValidity('Please enter full name after refreshing page.');">
                  <span>Full Name</span>
                </div>
                <div class="inputbox">
                  <input id="email" type="text" name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" oninvalid="this.setCustomValidity('Please enter valid email after refreshing page.');">
                  <span>Email</span>
                </div>
                <div class="inputbox">
                  <textarea id="textarea" name="textarea" required="required" oninvalid="this.setCustomValidity('Please enter something here after refreshing page.');"></textarea>
                  <span>Type your Message...</span>
                </div>
                <div class="inputbox">
                  <input type="submit" name="" value="send"/>
                </div>
              </form>
            </div>
      </div>
      </section><br>

      <footer>
        <div class="footer">
            <div class="footer-create">
                 &nbsp &nbsp Created and designed by <br> Ekta Varsani and Mihir Vamja
            </div>
            <div class="name">
                HOME DECOR
            </div>
            <div class="footer-nav">
                <nav>
                    <a href="index.php">Home</a>
                    <a href="bedroom.php">Bedroom</a>
                    <a href="kitchen.php">Kitchen</a>
                    <a href="hall.php">Hall</a>
                    <a href="contactus.php">Contact Us</a>
                </nav>
            </div>
        </div>
    </footer>

  </body>
</html>
