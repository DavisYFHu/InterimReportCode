<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Current Session: ";
print_r($_SESSION);
echo "<br>";
echo "GET Parameters: ";
print_r($_GET);
?>

<?php
$loggedIn = isset($_SESSION["userid"]);

if(isset($_GET['login']) && $_GET['login'] == "success") {
    echo "<div class='success'>Successful Login!</div>";
}
if(isset($_GET['signup']) && $_GET['signup'] == "success") {
    echo "<div class='success'>Successful Sign UP!</div>";
}
if(isset($_GET['logout']) && $_GET['logout'] == "success") {
    echo "<div class='success'>Successful Logout!</div>";
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UM Index</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="header">
        
<nav>
    <a href="index.html"><img src="images/logo.png" class="logo"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-close" onclick="hideMenu()"></i>
        <ul class="main-menu">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="faculties.html">FACULTIES</a></li>
            <li><a href="colleges.html">COLLEGES</a></li>
            <li><a href="courses.html">COURSES</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        <ul class="menu-member">
            <?php
                if (isset($_SESSION["userid"])) {
            ?>
                <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
            <?php
                } else {
            ?>
                <li><a href="signup.php">SIGN UP</a></li>
                <li><a href="login.php" class="header-login-a">LOGIN</a></li>
            <?php
                }
            ?>
        </ul>
    </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h5>Our Colleges</h5>
    </section>
    
    

    
<!---------- Facilities ---------->
<section class="facility">
    
    <p>UM has ten different colleges</p>
    
    <div class="row">
        <div class="facility-col">
            <a href="https://ckpc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/chaokuangpiu.jpg" alt="Chao Kuang Piu College">
                <h3>Chao Kuang Piu College</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://cytc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/chengyutung.jpg" alt="Cheng Yu Tung College">
                <h3>Cheng Yu Tung College</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://cklc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/cheongkunlun.jpg" alt="CHEONG KUN LUN COLLEGE">
                <h3>CHEONG KUN LUN COLLEGE</h3>           
            </a>
        </div>
        <div class="facility-col">
            <a href="https://ckyc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/choikaiyau.jpg" alt="CHOI KAIYAU COLLEGE">
                <h3>CHOI KAIYAU COLLEGE</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://hfpjc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/huoyingdong.jpg" alt="HENRY FOK PEARL JUBILEE COLLEGE">
                <h3>HENRY FOK PEARL JUBILEE COLLEGE</h3>
            </a>                    
        </div>
    </div>

    <div class="row">
        <div class="facility-col">
            <a href="https://lcwc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/luichewoo.jpg" alt="LUI CHE WOO COLLEGE">
                <h3>LUI CHE WOO COLLEGE</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://mlc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/mamankeiandlopaksam.jpg" alt="MA MAN KEI AND LO PAK SAM COLLEGE">
                <h3>MA MAN KEI AND LO PAK SAM COLLEGE</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://mcmc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/moonchunmemorial.jpg" alt="MOON CHUN MEMORIAL COLLEGE">
                <h3>MOON CHUN MEMORIAL COLLEGE</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://spc.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/shiupong.jpg" alt="SHIU PONG COLLEGE">
                <h3>SHIU PONG COLLEGE</h3>
            </a>                    
        </div>
        <div class="facility-col">
            <a href="https://sheac.rc.um.edu.mo/" target="_blank" rel="noopener noreferrer">
                <img src="images/stanleyhoeastasia.jpg" alt="STANLEY HO EAST ASIA COLLEGE">
                <h3>STANLEY HO EAST ASIA COLLEGE</h3>
            </a>                    
        </div>
    </div>
</section>

<style>
    body {
        background-color: #eaeaea; 
        font-family: 'Arial', sans-serif; 
        color: #333;
        margin: 0; 
    }

    .facility {
        padding: 40px; 
        text-align: center;
        background: white;
        border-radius: 10px; 
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
    }

    h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
        color: #007bff;
    }

    p {
        font-size: 1.2em; 
        margin-bottom: 30px; 
    }

    .row {
        display: flex;
        justify-content: space-between; 
        margin-bottom: 20px; 
    }

    .facility-col {
        flex: 1; 
        margin: 0 10px; 
        text-align: center; 
        transition: transform 0.3s, box-shadow 0.3s; 
    }

    .facility-col a {
        text-decoration: none;
        color: inherit; 
        display: block; 
        background-color: #f9f9f9; 
        border-radius: 10px;
        padding: 10px; 
        transition: background-color 0.3s, transform 0.3s;
    }

    .facility-col:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .facility-col:hover a {
        background-color: #e0e0e0; 
    }

    .facility-col img {
        max-width: 100%; 
        height: auto; 
        border-radius: 10px;
        transition: transform 0.3s; 
    }

    .facility-col img:hover {
        transform: scale(1.05); 
    }

    h3 {
        font-size: 1.2em; 
        color: #444; 
        margin: 10px 0 0; 
    }
</style>
  
 
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
