<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact TTOG</title>
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/80cdf29f61.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/styles.css" />

    <!--jQuery for side bar-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
    <!-- navbar -->
    <nav class="nav" id="nav">
        <div class="nav-center">
          <!-- nav header -->
          <div class="nav-header">
            <button class="nav-btn" id="nav-btn">
              <i class="fas fa-bars"></i>
            </button>
          </div>
          <!-- nav links -->
          <ul class="nav-links">
          <li><a href="index.html">home</a></li>
          <li><a href="podcast.html" class="closeSidebar">TTOG Podcast</a></li>
          <li><a href="about.html" class="closeSidebar1">about TTOG</a></li>
          <li><a href="contact.php">contact us</a></li>
          <li><a href="contact.php">Donate</a></li>
            </ul>
        </div>
      </nav>
    <!-- end of navbar -->
    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
      <div>
        <button class="close-btn" id="close-btn">
          <i class="fas fa-times"></i>
        </button>
        <!-- nav-links -->
        <ul class="sidebar-links">
        <li><a href="index.html">home</a></li>
          <li><a href="podcast.html" class="closeSidebar">TTOG Podcast</a></li>
          <li><a href="about.html" class="closeSidebar1">about TTOG</a></li>
          <li><a href="contact.php">contact us</a></li>
          <li><a href="contact.php">Donate</a></li>
        </ul>
        <!-- social icons -->
        <ul class="social-icons-centered hero-icons">
          <li>
            <a href="http://facebook.com" class="social-icons" target="_blank">
              <i class="fab fa-facebook social-icon"></i>
            </a>
          </li>
          <li>
            <a href="http://instagram.com" target="_blank" class="social-icons">
              <i class="fab fa-instagram social-icon"></i>                            
            </a>
          </li>
          <li>
            <a href="http://youtube.com" target="_blank" class="social-icons">
              <i class="fab fa-youtube social-icon"></i>                            
            </a>
          </li>
          <li>
            <a href="http://spotify.com" class="social-icons">
              <i class="fab fa-spotify social-icon"></i>                            
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- end of sidebar -->

    <section class="section single-page">
      <!-- section title -->
      <div class="section-title">
        <h1>contact us</h1>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="section-center page-info">
        <!-- contact page-->
        <p>
          If you're looking to reach us, 
        </p>
        <p>
        Email us at
          <a href="mailto:alejandro@munoza.com">contact@ttog.com</a>.
        </p>
        <p>
          Message us on
          <a href="#" target="_blank">Social Media</a>.
        </p>
        <p>
          Follow us on
          <a href="#" target="_blank">Social Media</a>.
        </p>
        <p>
          Or use this form and we'll get back to you soon.
          <?php include('contactform.php'); ?>
          <form method="post" action="contact.php" class="form">  <!--POST because it hides sensitive info-->
              <h3>Send Us A message</h3>                                                     
              <input type="text" name="name" placeholder="Full Name" class="form-boxes" value="<?= $name?>">
              <span class="error"><?= $name_error ?></span>
              <input type="text" name="email" placeholder="Your email" class="form-boxes" value="<?= $email?>">
              <span class="error"><?= $email_error ?></span>
              <input type="text" name="subject" placeholder="Subject"class="form-boxes" value="<?= $subject?>">
              <span class="error"><?= $subject_error ?></span>
              <textarea name="message" id="message" placeholder="Message" class="form-boxes" value="<?= $message?>"></textarea>
              <span class="error"><?= $message_error ?></span>
      
              <button type="submit" value = "Submit" name="submit" class="btn" data-submit="...Sending">Send Message</button>
              <div class="success"><?= $success; ?></div>
          </form>
        </p>
      </div>
    </section>

    <!-- footer -->
    <footer class="footer">
      <!-- social icons -->
      <ul class="social-icons-centered hero-icons">
        <li>
            <a href="http://facebook.com" class="social-icons" target="_blank">
              <i class="fab fa-facebook social-icon"></i>
            </a>
          </li>
          <li>
            <a href="http://instagram.com" target="_blank" class="social-icons">
              <i class="fab fa-instagram social-icon"></i>                            
            </a>
          </li>
          <li>
            <a href="http://youtube.com" target="_blank" class="social-icons">
              <i class="fab fa-youtube social-icon"></i>                            
            </a>
          </li>
          <li>
            <a href="http://spotify.com" class="social-icons">
              <i class="fab fa-spotify social-icon"></i>                            
            </a>
          </li>
        </ul>

      <p>&copy; <span id="date"></span> The Tabernacle of God. all rights reserved</p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
