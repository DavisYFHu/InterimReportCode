<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UM Course</title>
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
            <h1>Our Courses</h1>
    </section>
    
    
 <!---------- course ----------->
    
    <section class="course">
        <h1>Courses We Offer</h1>
        <p>UM offers over 120 degree programmes at bachelor’s, master’s, and doctoral levels in a variety of fields.</p>
        <div class="row">
            <div class="course-col">
                <h3>Bachelor's Levels</h3>
                <b><p><a href="https://hc.um.edu.mo/" style="color: purple;">HC Certificate Programme</a></p></b>
                <b><p>Bachelor of Arts</b></p>
                <b><p>Bachelor of Business Administration</b></p>
                <b><p>Bachelor of Science</b></p>
                <b><p>Bachelor of Education</b></p>
                <b><p>Bachelor of Law</b></p>
                <b><p>Bachelor of Law</b></p>
                <b><p>Bachelor of Social Sciences</b></p>
            </div>
            <div class="course-col">
                <h3>Master's Levels</h3>
                <b><p>Master of Philosophy</b></p>
                <b><p>Master of Arts</b></p>
                <b><p>Executive Master of Business Administration</b></p>
                <b><p>Master of Business Administration</b></p>
                <b><p>Master of Science</b></p>
                <b><p>Master of Education</b></p>
                <b><p>Master of Law</b></p>
                <b><p>Master of Social Sciences</b></p>
                <b><p>Master in Public Administration</b></p>           
            </div>
            <div class="course-col">
                <h3>Doctoral Levels</h3>
                <b><p>Doctor of Philosophy</b></p>
                <b><p>Doctor of Business Administration</b></p>
                <b><p>Doctor of Public Administration</b></p>
                <b><p>Doctor of Public Health</b></p>
            </div>
        </div>
    </section>
    
<!---------- Facilities ---------->
     
    <section class="facility">
        <h1>Our Facilities</h1>
        <p>UM has lots of world-class facilities.</p>
            <div class="row">
                <div class="facility-col">
                    <img src="images/library.jpg">
                    <h3>UM Wu Yee Sun Library</h3>
                    <p>After 40 years of development, the Library has become the largest library in Macau. At this moment, the Library holds a collection of over 17.9 million pieces/items, which includes about 870,000 books, 6,000 titles of periodicals, 35,000 rare books, 30,000 items of AV materials, 1,000 paintings/antiques, 3,000 items of archival collections and 5,000 rolls of microfilms.</p>
                </div>
                <div class="facility-col">
                    <img src="images/osa.jpg">
                    <h3>Sport Affairs</h3>
                    <p>UM has badminton courts, table tennis rooms, squash rooms, tennis courts, swimming pools and recreational facilities in public spaces (basketball machines, football machines, ice hockey machines, darts, American pool and billiards).</p>
                </div>
                <div class="facility-col">
                    <img src="images/s8.jpg">
                    <h3>S8 University Mall</h3>
                    <p>The first campus shopping centre in Macao is situated in the core section of the southern campus accommodation area.</p>
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
