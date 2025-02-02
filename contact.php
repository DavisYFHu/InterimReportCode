<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>University Website Design - Easy Tutorials</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h1>Contact Us</h1>
    </section>
    
    
<!------- Contact Us ------->

    
    <section class="location">
            <iframe src="https://maps.um.edu.mo/desktop/" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
    <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Av. da Universidade</h5>
                            <h5>N6 Administration Building</h5>
                            <h5><b>Taipa, Macau, CHINA</b></h5>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+ 853 8822-8833</h5>
                            <p>Monday - Thursday<br>09:00 - 13:00 14:00 - 17:45<br>Friday<br>09:00 - 13:00 14:00 - 17:30</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>info@um.edu.mo</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form method="post" action="contact-form-handler.php">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                    </form> 
                </div>
            </div>
    </section>
    
<!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>UM is an internationalised public comprehensive university in Macao.</p>
        <div class="icons">
            <a href="https://www.facebook.com/universityofmacau/"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/um_1981"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/universityofmacau/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/school/universityofmacau"><i class="fa fa-linkedin"></i></a>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> Kevin and Davis</p>
</section> 
  
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>    
