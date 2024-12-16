<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroConnect - Government Aided Schemes for Farmers</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/x-icon" href="assets/icons/Agrologo.png" />
    <style>
    /* Add smooth scrolling behavior */
    html {
        scroll-behavior: smooth;
    }
</style>
  </head>
  <body>
    <nav>
      <img class="logo" src="assets/icons/logo1.png" alt=""/>
      <style>

  img.logo {
    width: 70px;
    height: auto;
  }

  /* Target the favicon in the browser tab */
  link[rel="icon"] {
    width: 16px; /* Default size for favicons */
    height: 16px;
  }
</style>

      <ul class="nav__links">
        <li class="nav__item">
          <a href="#hero-section">Home</a>
        </li>
        <li class="nav__item">
          <a href="#about-section">About Us</a>
        </li>
        <li class="nav__item">
          <a href="fetch_crop.php">CropInfo</a>
        </li>
        <li class="nav__item">
          <a href="#contact-section">Contact Me</a>
        </li>
      </ul>
      <a 
        href="
            <?php 
                include_once("includes/session_start.php");
                if (isset($_SESSION["active"])){
                    echo "login.php";
                }
                else{
                    echo "login.php";
                }
            ?>"
        class="cta">
            <button>
            <?php 
                if (isset($_SESSION["active"]))
                    echo "Logout";
                else
                    echo "Login";
            ?>
            </button>
        </a>
    </nav>
    <section class="slideshow-header">
      <div class="header-container">
        <h2>AGRO CONNECT</h2>
        <p>Discover Government Aided Schemes supporting farmers</p>
      </div>
    </section>
    <section id="hero-section">
      <div class="overlay"></div>
      <div class="slideshow-container">
        <!-- Slideshow images and controls -->
        <div class="mySlides fade">
          <img src="assets/image/morning.jpg" style="width: 100%" />
        </div>
        <div class="mySlides fade">
          <img src="assets/image/cow.jpg" style="width: 100%" />
        </div>
        <div class="mySlides fade">
          <img src="assets/image/farming.jpeg" style="width: 100%" />
        </div>
        <!-- Next and previous buttons -->
        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
      </div>
    </section>

    <section id="scheme-section">
      <div class="text-wrapper">
        <div class="title-text">
          <h1>Namaskar Dosto!</h1>
          <p class="subheading">
            Welcome to AgroConnect a platform which help you find the best
            <br />Government Aided Schemes for Farmers
          </p>
        </div>
        <div class="btn-wrapper">
          <a href="user/schemes.php"><button class="find-btn">Find schemes for you ➜</button></a>
        </div>
      </div>
      <section class="scheme-section">
        <div class="scheme-container">
          <!-- Scheme items -->
          <div class="scheme-item">
            <span class="scheme-count">2010+</span>
            <div class="scheme-info">
              <span class="scheme-title">Total Schemes →</span>
            </div>
          </div>
          <div class="scheme-item">
            <span class="scheme-count">520+</span>
            <div class="scheme-info">
              <span class="scheme-title">Central Schemes →</span>
            </div>
          </div>
          <div class="scheme-item">
            <span class="scheme-count">1490+</span>
            <div class="scheme-info">
              <span class="scheme-title">States/UTs Schemes →</span>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="about-section">
      <div class="about-container">
        <div class="content">
          <h3>About Project</h3>
          <p>
          Welcome to Agro Connect! This innovative National Platform is a result of our college project for the rural internship. Developed using PHP, Agro App is designed to provide a centralized hub where users can easily access and explore a wide range of government schemes related to agriculture. Our goal is to create a seamless experience for citizens to discover and benefit from these resources.
          </p>
          <p>
            Agro App empowers users to effortlessly navigate through a myriad of
            scheme information, tailored to their specific eligibility criteria.
          </p>
          <p>
            With Agro App, users can easily identify and apply for the schemes
            that best suit their agricultural needs. Furthermore, our platform
            provides step-by-step guidance on the application process.
          </p>
          <a href="/about" class="view-more">View More →</a>
        </div>
        <div class="image-container">
          <img
            src="assets/image/pexels.jpg"
            alt="Video about myScheme"
          />
        </div>
      </div>
    </section>

    <section id="team-section">
      <div class="title-text">
        <h1>Meet the Team</h1>
        <p class="subheading">Learn about their roles and contributions.</p>
      </div>
      <div class="team-row">
        <div class="column">
          <div class="team-member">
            <img
              src="assets/image/Avi1.jpg"
              alt="Avinash"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Avinash Mishra</h2>
              <p class="title">Design & Backend</p>
              <p>Course - Btech</p>
              <p>Mishraavinash53073@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="team-member">
            <img
              src="assets/image/ayush.jpg"
              alt="Ayush"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Ayush Raj</h2>
              <p class="title">Design</p>
              <p>Course - Btech</p>
              <p>ayushraj62075@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="team-member">
            <img
              src="assets/image/vishal.jpg"
              alt="Amrit"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Vishal Kumar</h2>
              <p class="title">Backend</p>
              <p>Course - Btech</p>
              <p>vishal6621v@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
          <div class="team-member">
            <img
              src="assets/image/amrit.jpg"
              alt="Vishal"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Amrit Kumar</h2>
              <p class="title">Backend</p>
              <p>Course - Btech</p>
              <p>08114akv@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-section">
      <div class="title-text">
        <h1>Get in Touch</h1>
        <p class="subheading">Fill up the form to get in touch with us.</p>
      </div>
      <div class="contact-container">
        <!-- Contact form section -->
        <div class="contact-box">
          <!-- Left side of the form -->
          <div class="container-left">
            <h3>Fill the Form*</h3>
            <!-- Form -->
            <form id="contactForm" onsubmit="return validateForm()">
              <div class="input-row">
                <div class="input-group">
                  <label>Name*</label>
                  <input
                    type="text"
                    id="name"
                    placeholder="Enter your Name"
                    required
                  />
                </div>

                <div class="input-group">
                  <label>Phone*</label>
                  <input
                    type="text"
                    id="phone"
                    placeholder="+91 1234567890"
                    required
                  />
                </div>
              </div>

              <!-- Input row for Email and Subject -->
              <div class="input-row">
                <div class="input-group">
                  <label>Email*</label>
                  <input
                    type="email"
                    id="email"
                    placeholder="youremail@gmail.com"
                    required
                  />
                </div>

                <div class="input-group">
                  <label>Subject</label>
                  <input type="text" id="subject" placeholder="Inquiry" />
                </div>
              </div>

              <!-- Label for Message textarea -->
              <label>Message*</label>
              <textarea
                rows="10"
                id="message"
                placeholder="Enter your Message"
                required
              ></textarea>
              <button type="submit" class="submit-btn">Send Message ➜</button>
            </form>
          </div>
          <!-- Right side with contact information -->
          <div class="container-right">
            <h3>Reach Us</h3>
            <!-- Table for contact information -->
            <table>
              <tr>
                <td>Email:</td>
                <td>mishraavinash53073@gmail.com</td>
              </tr>

              <tr>
                <td>Phone:</td>
                <td>+91 9023330733</td>
              </tr>

              <tr>
                <td>Address:</td>
                <td>
                  RK University <br />
                  C-4, Janakpuri, <br />
                  Delhi - 110058, India
                </td>
              </tr>
            </table>

            <!-- Map section -->
            <!-- Map Section -->
<div class="map">
  <!-- Google Map iframe -->
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3341.9646040558177!2d70.89555317774901!3d22.240416392821157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b4a660019ee9%3A0x3d6254f36ed0e794!2sRK%20University%20Main%20Campus!5e1!3m2!1sen!2sin!4v1732815968957!5m2!1sen!2sin"
    width="600"
    height="450"
    style="border: 0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
  ></iframe>
</div>

      </div>
    </section>
    <section class="footer-section">
        <footer class="footer">
            <div class="footer-left">
                <img src="assets/image/Agr.png" alt="Company Logo">
            </div>
            <div class="footer-right">
                <ul class="social-links">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
        </footer>
    </section>
    <script src="assets/js/script.js"></script>
  </body>
</html>
