<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Comaptible" content="IE=edge" />
    <title>Portal to learn engineering in kannada.</title>
    <meta name="desciption" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
      $(window).on("scroll", function () {
        if ($(window).scrollTop()) {
          $("nav").addClass("black");
        } else {
          $("nav").removeClass("black");
        }
      });
    </script>
  </head>

  <body>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      src="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <header id="header">
      <!-- <nav>
        <ul>
  
          <li><a class="active" href="">Home</a></li>
          <li><a href="#about_section">About</a></li>
          <li><a href="#services_section">Branches</a></li>
          <li><a href="#contactus_section">Contact</a></li>
        </ul>
      </nav> -->
      <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid nav_item">
          <figure>
            <a href="#"
              ><img src="images/extra/logo.png" width="52" height="52" alt="logo"
            /></a>
          </figure>
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
          </button>
          <div
            class="collapse navbar-collapse mx-4"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#design1">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services_section">Branches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactus_section">Contact</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    </div>
      <div class="head-container">
        <div class="quote">
          <p>ಕನ್ನಡದಲ್ಲಿ ಇಂಜಿನಿಯರಿಂಗ್ ಕಲಿಯಿರಿ.</p>
          <br />
          <h3>Portal to learn Engineering in Kannada.</h3>
          <div class="play">
            <img src="images/icon/play.png" alt="play" /><span
              ><a href="https://youtu.be/tx61kRUNfCE" target="_blank"
                >Watch Now</a
              ></span
            >
          </div>
        </div>
        <div class="svg-image">
          <img src="images/extra/svg1.jpg" alt="svg" />
        </div>
      </div>
      <div class="side-menu" id="side-menu">
        <div class="close" onclick="sideMenu(1)">
          <img src="images/icon/close.png" alt="" />
        </div>
        <div class="user">
          <p></p>
        </div>
        <ul>
          <li><a href="#home_section">Home</a></li>
          <li><a href="#about_section">About</a></li>
          <li><a href="#services_section">Services</a></li>
          <li><a href="#contactus_section">Contact</a></li>
          <li><a href="#feedBACK">Feedback</a></li>
        </ul>
      </div>
    </header>

    <div class="title">
      <span>Popular Subjects</span>
    </div>
    <br /><br />
    <div class="course">
      <center>
        <div class="cbox">
          <div class="det">
            <a href="https://www.geeksforgeeks.org/computer-network-tutorials/"
              ><img src="images/courses/book.png" />Computer Networks</a
            >
          </div>
          <div class="det">
            <a href=""><img src="images/courses/d1.png" />Operating System</a>
          </div>
          <div class="det">
            <a
              href="https://practice.geeksforgeeks.org/courses/competitive-programming-live?utm_source=GfG&utm_medium=gfg_submenu&utm_campaign=DS_Submenu/"
              ><img src="images/courses/paper.png" />Competitive Programming</a
            >
          </div>
          <div class="det">
            <a href="https://www.geeksforgeeks.org/dbms/"
              ><img src="images/courses/d1.png" />Database Management System</a
            >
          </div>
        </div>
      </center>
      <div class="cbox">
        <div class="det">
          <a href="subjects/computer_courses.html"
            ><img src="images/courses/computer.png" />Computer Courses</a
          >
        </div>
        <div class="det">
          <a href="https://www.geeksforgeeks.org/data-structures/?ref=shm"
            ><img src="images/courses/data.png" />Data Structures</a
          >
        </div>
        <div class="det">
          <a
            href="https://www.geeksforgeeks.org/fundamentals-of-algorithms/?ref=shm"
            ><img src="images/courses/algo.png" />Algorithm</a
          >
        </div>
        <div class="det det-last">
          <a
            href="https://www.geeksforgeeks.org/computer-science-projects/?ref=sh"
            ><img src="images/courses/projects.png" />Projects</a
          >
        </div>
      </div>
    </div>

    <!-- <div class="diffSection" id="about_section">
      <center>
        <p style="font-size: 50px; padding: 100px"></p>
      </center>
      <div class="about-content">
        <div class="side-image">
          <img class="sideImage" src="images/extra/e3.jpg" />
        </div>
        <div class="side-text">
          <h2>ಕನ್ನಡದಲ್ಲಿ ಇಂಜಿನಿಯರಿಂಗ್.</h2>
          <p>
            ಶಿಕ್ಷಣವು ಕಲಿಕೆಯನ್ನು ಸುಗಮಗೊಳಿಸುವ ಪ್ರಕ್ರಿಯೆಯಾಗಿದೆ, ಅಥವಾ ಜ್ಞಾನ,
            ಕೌಶಲ್ಯಗಳು, ಮೌಲ್ಯಗಳು, ನಂಬಿಕೆಗಳು ಮತ್ತು ಅಭ್ಯಾಸಗಳನ್ನು ಪಡೆದುಕೊಳ್ಳುವುದು.
            ಶೈಕ್ಷಣಿಕ ವಿಧಾನಗಳಲ್ಲಿ ಬೋಧನೆ, ತರಬೇತಿ, ಕಥೆ ಹೇಳುವಿಕೆ ಸೇರಿವೆ. ಶೈಕ್ಷಣಿಕ
            ವೆಬ್‌ಸೈಟ್ ಆಟಗಳು, ವೀಡಿಯೊಗಳು ಅಥವಾ ವಿಷಯ ಸಂಬಂಧಿತ ಸಂಪನ್ಮೂಲಗಳನ್ನು ಹೊಂದಿರುವ
            ವೆಬ್‌ಸೈಟ್‌ಗಳನ್ನು ಒಳಗೊಂಡಿರಬಹುದು, ಅದು ಕಲಿಕೆಯನ್ನು ವರ್ಧಿಸಲು ಮತ್ತು ತರಗತಿಯ
            ಬೋಧನೆಗೆ ಪೂರಕವಾಗಿದೆ. ಈ ವೆಬ್‌ಸೈಟ್‌ಗಳು ಕಲಿಕೆಯ ಪ್ರಕ್ರಿಯೆಯನ್ನು ವಿಶೇಷವಾಗಿ
            ಇಂದಿನ ಯುಗದಲ್ಲಿ ವಿದ್ಯಾರ್ಥಿಗೆ ಮನರಂಜನೆ ಮತ್ತು ಆಕರ್ಷಕವಾಗಿಸಲು ಸಹಾಯ
            ಮಾಡುತ್ತದೆ.
          </p>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br /> -->
    <br><br>
    
    <div class="service-swipe">
      <div class="diffSection" id="services_section">
        <center>
          <p
            style="
              font-size: 50px;
              padding: 100px;
              padding-bottom: 40px;
              color: #fff;
            "
          >
            ವಿಭಾಗಗಳು
          </p>
        </center>
      </div>
      <a href="view.php">
        <div class="s-card">
          <img src="images/icon/computer-courses.png" />
          <p>ಕಂಪ್ಯೂಟರ್ ಸೈನ್ಸ್ ಮತ್ತು ಇಂಜಿನಿಯರಿಂಗ್.</p></a>
        </div>
      </a>
      <a href="ISE_view.php">
        <div class="s-card">
          <img src="images/icon/brainbooster.png" />
          <p>ಮಾಹಿತಿ ವಿಜ್ಞಾನ ಮತ್ತು ಇಂಜಿನಿಯರಿಂಗ್.</p>
        </div>
      </a>
      <a href="#">
        <div class="s-card">
          <img src="images/icon/online-tutorials.png" />
          <p>ಎಲೆಕ್ಟ್ರಾನಿಕ್ಸ್ ಮತ್ತು ಸಂವಹನ.</p>
        </div>
      </a>
      <a href="#">
        <div class="s-card">
          <img src="images/icon/papers.jpg" />
          <p>ಮೆಕ್ಯಾನಿಕಲ್ ಇಂಜಿನಿಯರಿಂಗ್.</p>
        </div>
      </a>
      <a href="#">
        <div class="s-card">
          <img src="images/icon/p3.png" />
          <p>ಏರೋನಾಟಿಕಲ್ ಇಂಜಿನಿಯರಿಂಗ್.</p>
        </div>
      </a>
      <a href="#">
        <div class="s-card">
          <img src="images/icon/discussion.png" />
          <p>ಕೃತಕ ಮತ್ತು ಯಂತ್ರ ಕಲಿಕೆ.</p>
        </div>
      </a>
      <a href="#">
        <div class="s-card">
          <img src="images/icon/q1.png" />
          <p>ಮೆಕಾಟ್ರಾನಿಕ್ಸ್ ಇಂಜಿನಿಯರಿಂಗ್.</p>
        </div>
      </a>
      <a href="#">
        <div class="s-card">
          <img src="images/icon/help.png" />
          <p>ಇಂಟರ್ನೆಟ್-ಆಫ್-ಥಿಂಗ್ಸ್.</p>
        </div>
      </a>
    </div>

    <div class="diffSection" id="contactus_section">
      <center>
        <p style="font-size: 50px; padding: 100px">ನಮ್ಮನ್ನು ಸಂಪರ್ಕಿಸಿ.</p>
      </center>
      <div class="csec"></div>
      <div class="back-contact">
        <div class="cc">
          <form
            action="mailto:roshank9419@gmail.com"
            method="post"
            enctype="text/plain"
          >
            <label>First Name <span class="imp">*</span></label
            ><label style="margin-left: 185px"
              >Last Name <span class="imp">*</span></label
            ><br />
            <center>
              <input
                type="text"
                name=""
                style="margin-right: 10px; width: 175px"
                required="required"
              /><input
                type="text"
                name="lname"
                style="width: 175px"
                required="required"
              /><br />
            </center>
            <label>Email <span class="imp">*</span></label
            ><br />
            <input
              type="email"
              name="mail"
              style="width: 100%"
              required="required"
            /><br />
            <label>Message <span class="imp">*</span></label
            ><br />
            <input
              type="text"
              name="message"
              style="width: 100%"
              required="required"
            /><br />
            <label>Additional Details</label><br />
            <textarea name="addtional"></textarea><br />
            <button type="submit" id="csubmit">Send Message</button>
          </form>
        </div>
      </div>
    </div>

    <!-- <div class="title2" id="feedBACK">
      <span>ಪ್ರತಿಕ್ರಿಯೆ.</span>
      <div class="shortdesc2">
        <p>ದಯವಿಟ್ಟು ನಿಮ್ಮ ಅಮೂಲ್ಯವಾದ ಪ್ರತಿಕ್ರಿಯೆಯನ್ನು ನಮಗೆ ಹಂಚಿಕೊಳ್ಳಿ.</p>
      </div>
    </div> -->

    <!-- <div class="feedbox">
      <div class="feed">
        <form action="" method="post" enctype="text/plain">
          <label>Your Name</label><br />
          <input type="text" name="" class="fname" required="required" /><br />
          <label>Email</label><br />
          <input type="email" name="mail" required="required" /><br />
          <label>Additional Details</label><br />
          <textarea name="addtional"></textarea><br />
          <button type="submit" id="csubmit">Send Message</button>
        </form>
      </div>
    </div> -->
    <marquee
      style="
        background: linear-gradient(to right, #fa4b37, #df2771);
        margin-top: 50px;
      "
      direction="left"
      onmouseover="this.stop()"
      onmouseout="this.start()"
      scrollamount="20"
    >
      <div class="marqu">
        “ಪ್ರತಿಯೊಬ್ಬ ವ್ಯಕ್ತಿಯು ಎರಡು ರೀತಿಯ ಶಿಕ್ಷಣ ಹೊಂದುತ್ತಾನೆ. ಒಂದು ಇತರರು ಅವನಿಗೆ
        ನೀಡುವುದು. ಇನ್ನೊಂದು ಸ್ವಂತ ಅವನು ಕಲಿಯುವುದು”
      </div>
    </marquee>

    <footer>
      <div class="footer-container">
        <div class="left-col">
          <div class="logo"></div>
          <div class="social-media">
            <a href="#"><img src="images/icon\fb.png" /></a>
            <a href="#"><img src="images/icon\insta.png" /></a>
            <a href="#"><img src="images/icon\tt.png" /></a>
            <a href="#"><img src="images/icon\ytube.png" /></a>
            <a href="#"><img src="images/icon\linkedin.png" /></a>
          </div>
          <br /><br />
          <!-- <p class="rights-text">Copyright © 2021 Created By Swaroop, Varun, Sujith All Rights Reserved.</p>
				<br>
				<p><img src="images/icon/location.png"> Mangalore Institute of Technology and
					Engineering<br>Mijar,Moodibidri. </p><br>
				<p><img src="images/icon/phone.png"> +91-1234-567-890<br><img src="images/icon/mail.png">&nbsp;
					abcd@gmail.com</p> -->
        </div>
        <div class="right-col">
          <h1 style="color: #fff"></h1>
          <div class="border"></div>
          <br />
          <h3>Admin Login</h3><br>
          <a href="admin.php"><button style="cursor:pointer; padding:5px;background-color:black;color:white;">For admin</button></a>
        </div>
      </div>
    </footer>
  </body>
</html>
