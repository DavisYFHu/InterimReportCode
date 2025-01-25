<?php
session_start();

if (!isset($_SERVER['APP_DEBUG']) || !$_SERVER['APP_DEBUG']) {
    error_reporting(0);
    ini_set('display_errors', 0);
}

$loggedIn = isset($_SESSION["userid"]);

function showMessage($type, $message) {
    if(isset($_GET[$type]) && $_GET[$type] == "success") {
        echo "<div class='success'>" . htmlspecialchars($message) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="University of Macau - An international public comprehensive university">
    <meta name="keywords" content="University of Macau, UM, Higher Education, Macau">
    <title>UM Index</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .success {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            text-align: center;
        }
        
        .nav-links {
            display: flex;
            align-items: center;
        }
        
        .main-menu, .menu-member {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .main-menu li, .menu-member li {
            margin: 0 15px;
        }
        
        .main-menu a, .menu-member a {
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }
        
        .main-menu a:hover, .menu-member a:hover {
            color: #f44336;
        }
        
        .menu-member {
            margin-left: auto;
        }
        
        @media screen and (max-width: 768px) {
            .nav-links {
                position: fixed;
                background: rgba(0, 0, 0, 0.9);
                height: 100vh;
                width: 200px;
                top: 0;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 0.5s;
                flex-direction: column;
                padding: 20px;
            }
            
            .main-menu, .menu-member {
                flex-direction: column;
                width: 100%;
            }
            
            .main-menu li, .menu-member li {
                margin: 10px 0;
            }
            
            .menu-member {
                margin-top: 20px;
                padding-top: 20px;
                border-top: 1px solid rgba(255,255,255,0.1);
            }
            
            .fa-bars, .fa-close {
                display: block;
                color: #fff;
                font-size: 22px;
                cursor: pointer;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <?php
        showMessage('login', 'Successful Login!');
        showMessage('signup', 'Successful Sign Up!');
        showMessage('logout', 'Successful Logout!');
    ?>
    
    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="University of Macau Logo" class="logo"></a>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul class="main-menu">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="faculties.php">FACULTIES</a></li>
                    <li><a href="colleges.php">COLLEGES</a></li>
                    <li><a href="courses.php">COURSES</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
                <ul class="menu-member">
                    <?php if ($loggedIn): ?>
                        <li><a href="#"><?php echo htmlspecialchars($_SESSION["useruid"]); ?></a></li>
                        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                    <?php else: ?>
                        <li><a href="signup.php">SIGN UP</a></li>
                        <li><a href="login.php" class="header-login-a">LOGIN</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <h1>University of Macau</h1>
            <p>UM is an international public comprehensive university in Macao, with a multicultural campus and a system of whole-person education underpinned by faculties and residential colleges in an international education setup.</p>
            <a href="contact.php" class="hero-btn">Visit Us to Know More</a>
        </div>
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
    
<!---------- campus ---------->
    
    <section class="campus">
        <h1>Our three campus</h1>
        <p>UM has three campuses which span Taipa and Hengqin.</p>
            <div class="row">
                <div class="campus-col">
                    <img src="images/UM_Admin_Building.jpg">
                    <div class="layer">
                        <h3>Old Campus</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/main.jpg">
                    <div class="layer">
                        <h3>Main Campus</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/Admin.jpg">
                    <div class="layer">
                        <h3>Hengqin Campus</h3>
                    </div>
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
    
    
<!---------- testimonials ---------->
    
    <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Humanity, Integrity, Propriety, Wisdom and Sincerity.</p>
            <div class="row">
                <div class="testimonial-col">
                    <img src="images/user1.jpg">
                    <div> 
                        <p>Ada, a student in the Department of Government and Public Administration of the Faculty of Social Sciences, says that as the last stop for students before they enter the workforce, UM provides many resources to help them develop their potential. 'During my four years at UM, I held the position of secretary of the Board of Supervisors and chairman of the Election Committee of the UM Students' Union. My teammates and I encouraged each other and grew together, says Hong, who also mentioned that UM's whole-person education model provides diverse development opportunities for students:
'This approach enables every student to find their special role. Joining the Honours College has been a great experience and provided me with a lot of motivation. I have to maintain a good GPA while participating in activities on and off campus, which has helped me improve my time management skills!'</p>
                        <h3>Ada HONG</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="testimonial-col">
                    <img src="images/user2.jpg">
                    <div>
                        <p>Lorraine, a graduating student in the Department of English of the Faculty of Arts and Humanities, sums up her university life in one word
'possibility': 'I would like to express my gratitude to my tutor, Prof Chiu Man Yin, who constantly encourages me to go beyond the limits of my major and explore what I love in the wider world! During the four years at UM, she made a lot of efforts to develop her interdisciplinary skills, such as participating in business competitions with her fellow FBA students, as well as gene-editing competitions with students in the Faculty of Health Sciences. From these experiences, she learned the importance of fostering a variety of interests and not setting a limit for herself, and she wants to invite all younger students to find hobbies outside their studies..</p>
                        <h3>Lorraine YANG</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
                
            </div>
    </section>
    
<!------ Call To Action ------>

<section class="cta">
    
       <h1>Enroll For Our continuing and life-long education</h1>
        <a href="https://cce.um.edu.mo/?lang=en" class="hero-btn">CONTACT US</a>
    
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


    <script>
        const navLinks = document.getElementById("navLinks");
        
        function showMenu() {
            navLinks.style.right = "0";
            document.body.style.overflow = 'hidden'; 
        }
        
        function hideMenu() {
            navLinks.style.right = "-200px";
            document.body.style.overflow = 'auto';
        }
        
        document.addEventListener('click', function(event) {
            const isClickInside = navLinks.contains(event.target);
            const isMenuButton = event.target.classList.contains('fa-bars');
            
            if (!isClickInside && !isMenuButton && window.innerWidth <= 768) {
                hideMenu();
            }
        });
        
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                navLinks.style.right = "0";
            } else {
                navLinks.style.right = "-200px";
            }
        });
    </script>
</body>
</html>
