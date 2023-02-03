<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>option page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="option1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style type="text/css">
#slider{
  overflow: hidden;
  position: relative;
  margin-top: 10%;
  margin-left: 10%;
  margin-bottom: 10%;
  height: 80%;
  width: 25%;
}
.titlee{
  margin: 40%;
  text-decoration-color: #F2F2F2;
  width: 90%;
}
#slider figure{
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  animation: 20s slider infinite;
}
#slider figure img{
  width: 20%;
  float: left;
}
@keyframes slider {
  0%{
    left: 0;
  }
  20%{
    left: 0;
  }
}
    </style>
</head>
<body>
    <section class="text-white-400 body-font bg-black-900">
        <div class="container px-8 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Tell us about your mood :)</h1>
              <div class="h-1 w-20 bg-yellow-500 rounded"></div>
            </div>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="option/genres (1).jpg" alt="content">
                <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Choose</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">Genre</h2>
                <form action="#" method="post">
                <div class="genre">
        
                  <select class="select" name="genre" id="genre">
                  <option value="select">Select Genre</option>
                    <option value="action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="sci-fi">Sci-fi</option>
                    <option value="thriller">Thriller</option>
                    <option value="comedy">Comedy</option>
                    <option value="crime">Crime</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="romance">Romance</option>
                    <option value="documentary">Documentary</option>
                  </select>
              </div>

              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="option/language.jpg" alt="content">
                <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Choose</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">Language</h2>
                <div class="language">
        
                  <select class="select" name="languages" id="lang">
                  <option value="select">Select Language</option>
                   <option value="english">English</option>
                    <option value="Hindi">Hindi</option>
                    <option value="tamil">Tamil</option>
                    <option value="telugu">Telugu</option>
                    <option value="malyalam">Malyalam</option>
                    <option value="Kannada">Kannada</option>
                  </select>
              </div>
                <!--<p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>-->
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="option/rating.png" alt="content">
                <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Choose</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">Rating</h2>
                <div class="Ratings">
        
                  <select class="select" name="rating" id="rat">
                  <option value="select">Select Rating</option>
                    <option value="1 star">1 star</option>
                    <option value="2 star">2 star</option>
                    <option value="3 star">3 star</option>
                    <option value="4 star">4 star</option>
                    <option value="5 star">5 star</option>
                    <option value="6 star">6 star</option>
                    <option value="7 star">7 star</option>
                    <option value="8 star">8 star</option>
                    <option value="9 star">9 star</option>
                    <option value="10 star">10 star</option>
                  </select>
              </div>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="option/year.jpg" alt="content">
                <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Choose</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">Year of release</h2>
                <!--<p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>-->
                <div class="input-box">
                  <input type="text" placeholder="Enter year" name = "year" required>
                  </div>
              </div>
            </div>
          </div>
        </div>
          <div class="button">
          <input type="submit" value="GET RECOMMENDATIONS" name = "submit0" required>
          </div>
</form>
  <style>
    * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: flex;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
/* .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
} */

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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 9.5s;
  animation-direction: normal;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides ">
<?php
include("dbcon.php");
if (isset($_POST['submit0'])) {
  $genre = $_POST['genre'];
  $lang = $_POST['languages'];
  $rating = $_POST['rating'];
  $year = $_POST['year'];
  $sql = "SELECT * FROM `movies` WHERE Genre = '$genre' and Mov_lang = '$lang' and Ratings = '$rating' and Mov_year = '$year'";
  $result = mysqli_query($connection, $sql);
  $r = 1;
  while ($row = mysqli_fetch_array($result)) {
    echo '<div class = "Image">
  <img  src="movieImages/'.$row['Image'].'" style="width:100%">
  </div>
  <div class="text">Movie Name:  '.$row['Mov_title'].'</div>
  <div class="text">Movie Language:  '.$row['Mov_lang'].'</div>
  <div class="text">Movie Rating:  '.$row['Ratings'].'</div>
  <div class="text">Movie Year:  '.$row['Mov_year'].'</div>
  <div class="text">Actor Name:  '.$row['Act_Name'].'</div>
  <div class="text">Director Name:  '.$row['Dir_Name'].'</div>
 ';
  }
}?>
<!-- Next and previous buttons -->

<br>
<script>
        let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>