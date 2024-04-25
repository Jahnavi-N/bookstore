<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student's Book store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="dropdown_hover.css" rel="Stylesheet">
  <link href="carousel_background.css" rel="Stylesheet">
  <link href="responsive.css" rel="Stylesheet">

</head>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif; background-color:"skyblue";}
.mySlides {display: none;}
img {vertical-align: middle;}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>

    <div class="container-fluid-sm">    
        <div class="container-sm">           
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top ">
            <a clas="navabr-brand" href="#">
                <img src="aboutus.jpg" alt="Logo" width="80px" class="rounded-pill">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="home1.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="about_us.php" class="nav-link">ABOUT US</a>
                </li>
                <div class="dropdown">

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">TYPES OF BOOKS</a>
                    <div class="dropdown-content">
                    <a href="hist.php">Historical</a>
                    <a href="fairy.php">Fairy tales</a>
                    <a href="comedy.php">Comedy</a>
                    <a href="horror.php">Horror</a>
                    <a href="love.php">Love</a>
                    </div>
                </li>
                </div>
                
                <li class="nav-item">
                    <a href="contact_us.php" class="nav-link">CONTACT US</a>

                    <li class="nav-item">
                    <a href="admin.php" class="nav-link">Shopping</a>

                    
                
            </ul>
        </nav>
        </div>
        <div class="outer">
        </div>
     
    
</div>
</body>
</html>
