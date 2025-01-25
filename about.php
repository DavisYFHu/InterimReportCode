<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UM about</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
 <style>
        .container {
            display: flex; 
            align-items: center; 
            justify-content: center; 
            gap: 20px; 
        }
        .container img {
            max-width: 100%; 
            height: auto; 
        }
       .text {
            text-align: center; 
            font-size: 20px;
            font-weight: bold; 
            color: black;           
        }
        h4 {
            font-size: 100px; 
            font-weight: bold;
            color: white;
            text-align: center;
        }
    </style>
<body>
    <section class="sub-header">
        <nav>
            <img src="images/logo.png">
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li>HOME</li>
                    <li>ABOUT</li>
                    <li>COURSE</li>
                    <li>BLOG</li>
                    <li>CONTACT</li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>   
        <h4>About UM</h4>    
    </section>
  
    
    <body>
    <div class="container">
        <img src="images/school.jpg">
        <div class="text"> <h class="text">Rector's Message</h><br><p>The University of Macau (UM) is an international public comprehensive university in Macao. Since her establishment in 1981, UM has been dedicated to providing a multifaceted education through our unique educational model and residential college system and in accordance with the university motto: Humanity, Integrity, Propriety, Wisdom and Sincerity.In recent years, UM has been taking initiatives for a comprehensive and structural reform and entered a new era of unprecedented growth. We are confident that the rising reputation of UM will enable us to scale new heights in the international academic circles.</h></div>
        <img src="images/school2.jpg">
    </div>
</body>
   
    
    

    
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>UM is an internationalised public comprehensive university in Macao.</h1>     
            <p>Ranking and International Accreditation<br>UM is an internationalised public comprehensive university in Macao. In the Times Higher Education (THE) World University Rankings 2025, UM ranked 180; in the Quacquarelli Symonds (QS) World University Rankings 2025, UM ranked No. 245. In Essential Sciences Indicators (ESI) rankings, it is among the top 1% in 14 subjects, namely Engineering, Computer Science, Materials Science, Chemistry, Pharmacology & Toxicology, Clinical Medicine, Psychiatry/Psychology, Biology & Biochemistry, Social Sciences, General, Molecular Biology & Genetics, Agricultural Sciences, Economics & Business, Environment/Ecology, Mathematics. Many academic programmes at UM have received international accreditations, namely AACSB Accreditation, AMBA Accreditation, the Hong Kong Institution of Engineers (HKIE) Accreditation, etc.</p >
            
        </div>
        <div class="about-col">
            <img src="images/UNADJUSTEDNONRAW_thumb_912-800x630.jpg">
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
