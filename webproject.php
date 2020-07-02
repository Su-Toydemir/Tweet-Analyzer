<!DOCTYPE html>

<html lange="en">

<head>
  <link rel="icon" href="45.png">
  <title>TweetAnalyzer</title>
  <link href="ProjectCSS.css" type="text/css" rel="stylesheet">
  
<style>
body {
font-family:Verdana,sans-serif;
background-image: 
url("brownIMG.jpg");
overflow:hidden;
}
</style>
</head>

<body>
  <div id=main>
    <header>
      <div class="panel-body">
        <div id="page" class="navigator">
          <ul>

          




            <a href="http://localhost/webproject.php#home">Home</a>
            <a href="http://localhost/webproject.php#aboutus">About Us</a>
            <div class="dropdown">
              <button class="dropbtn">Series
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="http://localhost/Genres.php#series">Genres</a>
                <a href="http://localhost/ratingchart.php#ratings">Rating Charts</a>
                <a 
href="http://localhost/RatingsTable.php">Ratings Table</a>

</div>

</div>

<a href="http://localhost/contact.php">Contact</a>

<a 
href="http://localhost/search.php">Search</a>
          </ul>
        </div>
    </header>

    <div class="container" >
      <div class="panel panel-default" id="home">
        <div class="panel-heading">
        </div>

        
        <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="stranger.jpg" style="width:100%">

            <div class="centered">Stranger Things Season 3 <br> Coming Soon
              <hr><button class="button" type="button"><a class="button"
                  href="https://www.netflix.com/tr/title/80057281">Click here to see more information</a></button>
              <hr>
            </div>

          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="casapapel.png" style="width:100%">

            <div class="centered">La Casa de Papel Season 3 <br> Coming Soon
              <hr><button class="button" type="button"><a class="button"
                  href="https://www.netflix.com/tr/title/80192098">Click here to see more information</a></button>
              <hr>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="cuckoo.png" style="width:100%">
            <div class="centered">Cuckoo Season 5 <br> Coming Soon
              <hr><button class="button" type="button"><a class="button"
                  href="https://www.netflix.com/tr/title/80091341">Click here to see more information</a></button>
              <hr>
            </div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
       <!--  <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div> -->
      </div>
    </div> 

    <div class="panel panel-default" id="aboutus">
      <div class="panel-heading">
        <h3 class="panel-title">About Us</h3>
      </div>
      <div class="row">
        <div class="panel-body">
          <div class="column">
            <div class="flip-card" style="margin-bottom: 200px;">

              <div class="flip-card-inner">

                <div class="flip-card-front">

                  <img src="pexels-photo-374074.jpeg" alt="Avatar" style="width:400px;height:300px;">
                  <h1 class="centered">Who We Are?</h1>
                </div>

                <div class="flip-card-back" >
                  
                <h3 style="text-align: center; margin-top: 80px; margin-left: 40px;  margin-right: 40px; "><strong>TweetAnalyzer is a mashup project that gets data from the Twitter APIs in order to show the most popular TV series according to number of tweets.</strong> </h3>
                </div>
              </div>
            </div>


          </div>

        </div>
        <div class="column">
          <div class="flip-card" style="margin-bottom: 200px;">

            <div class="flip-card-inner">

              <div class="flip-card-front">

                <img src="data.png" alt="Avatar" style="width:400px;height:300px;">
                <h1 class="centered">Our Mission</h1>
              </div>

              <div class="flip-card-back">
                <h3 style="text-align: center; margin-top: 80px; margin-left: 40px;  margin-right: 40px; "><strong>By using these data values from Twitter, we show them in graphical and chart form to the user of the web application.Also we display people's tweets about the TV series.</strong></h3>
                
              </div>
            </div>
          </div>


        </div>

        <div class="column">
            <div class="flip-card" style="margin-bottom: 200px;">

              <div class="flip-card-inner">

                <div class="flip-card-front">

                  <img src="tweet.png" alt="Avatar" style="width:400px;height:300px;">
                  <h1 class="centered">Our Vision</h1>
                </div>

                <div class="flip-card-back">
                  <h3 style="text-align: center; margin-top: 80px; margin-left: 40px;  margin-right: 40px; "><strong>We try to get more information about which TV series attract the audiences more.</strong></h3>
                  
                </div>
              </div>
            </div>


          </div>











      </div>









    </div>


  </div>

  
  </div>
  
<div class="footer" >
  <h3>Follow us on social media</h3>
  <a href="https://tr-tr.facebook.com/"><img class="facebook" src="facebook.png"style="width40px;height:30px;margin-top:20px;"></a> 
  <a href="https://twitter.com/login?lang=tr"><img class="twitter" src="twitter.png"style="width40px;height:30px;margin-top:20px;"></a>
    <a href="https://www.snapchat.com/"><img class="snapchat" src="snapchat.png"style="width40px;height:30px;margin-top:20px;"></a>
      <a href="https://www.instagram.com/?hl=tr"><img class="instagram" src="instagram.png"style="width40px;height:30px;margin-top:20px;"></a>
      <h3>Click
<a 
href="cookies.php">here</a> to fill cookies.</h3>
</div>
  
  <script> $(function () {
      $("ul li a").bind("click", function (event) {
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
        var target = $(this).attr("href");
        $("html, body").stop().animate({
          scrollLeft: $(target).offset().left,
          scrollTop: $(target).offset().top
        }, 1200);
      });
    });</script>

  <script>

    var slideIndex = 1;
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
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    } 
  </script>


  <script>function viewGraph() {
      $('.column').css('height', '0');
      $('table tr').each(function (index) {
        var ha = $(this).children('td').eq(1).text();
        $('#col' + index).animate({ height: ha }, 1500).html("<div>" + ha + "</div>");
      });
    }
    $(document).ready(function () {
      viewGraph();
    });
  </script>

  <script>
    window.onscroll = function () { myFunction() };

    var navbar = document.getElementById("page");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>



</body>

</html>