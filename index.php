<!DOCTYPE html>
<!--
Copyright Oliver's Custom Roofing. All rights reserved.
-->
<html>
    <head>
        <link rel="icon" href="assets/images/logo/icon.jpg">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Oliver's Custom Roofing Homepage: Your trusted local 
              specialists in all things roofing. New contruction, repairs, remodels.">
        <meta name="keywords" content="metal, asphalt, shingle, tile, slate, woodshake, 
              flat, covering, in the dry, repairs, new construction, renovations, 
              additions, gutters, leaking, leaky, hail damage, storm damage, storm 
              repair, recover, tearoff, house addition">
        <meta name="robots" content="index,follow">
        <title>Oliver's Custom Roofing - Build, Repair or Remodel Your Roof</title>
    </head>
    <body>
        <header>
            <?php include 'common/header.php';?>
        </header>
        
        <div class="body-wrapper">
            <!-- Slide show Images -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="assets/images/carousel/roof1.jpg" style="width:100%" alt="">
                </div>
                <div class="mySlides fade">
                    <img src="assets/images/carousel/roof2.jpg" style="width:100%" alt="">
                </div>
                <div class="mySlides fade">
                    <img src="assets/images/carousel/roof3.jpg" style="width:100%" alt="">
                </div>
                <div class="mySlides fade">
                    <img src="assets/images/carousel/roof4.jpg" style="width:100%" alt="">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Dots Below Slide show -->
                <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                      <span class="dot" onclick="currentSlide(4)"></span> 
                </div>
             </div>

            <div id="services">
                <h2>residential <br><span id="blue-and">&</span> commercial</h2>
                <img id="underline" src="assets/images/underline.png" alt="Underline">
                <ul>
                    <li><span class="services-li">new contstruction</span></li>
                    <li><span class="services-li">renovations</span></li>
                    <li><span class="services-li">repairs</span></li>
                    <li><span class="services-li">recovers</span></li>
                    <li><span class="services-li">tear offs</span></li>
                    
                </ul>
            
            </div>
            
            
            
            <!-- Text Image 
            <img id="textImg" src="assets/images/text.png">
-->
            <!-- Video -->
            <iframe frameborder="0" allowfullscreen src="https://player.ooyala.com/static/v4/stable/4.6.9/skin-plugin/iframe.html?ec=RuMXBuZTr6sI5ZHo1wB8yxiIgSJ5Viwh&pbid=OTU4NzgwZjY4M2U2Zjk3YWE2MjRiNTg5&pcode=ZndWs6XWD1whSRcglBVo-EhklHLR"></iframe>

          <!-- Review Us Text -->
          <img id="reviewImg" src="assets/images/review-text.png">


          <!-- Review Links -->
          <div class="social-container">
              <a href="https://www.facebook.com/pg/OliversCustomRoofing/reviews/"><img class="social" id="social1" src="assets/images/social/facebook.png" alt="Facebook Reviews"></a>
              <a href="https://goo.gl/maps/fpaCTmLXQtG2"><img class="social" id="social2" src="assets/images/social/google.png" alt="Google Reviews"></a>
              <a href="https://member.angieslist.com/member/store/10085304/reviews"><img class="social" id="social3" src="assets/images/social/angies.png" alt="Angie's List Reviews"></a>
              <a href="https://www.bbb.org/arkansas/business-reviews/roofing-contractors/olivers-custom-roofing-in-holland-ar-11000995"><img class="social" id="social4" src="assets/images/social/bbb.png" alt="Better Business Bureau Reviews"></a>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="contact-container">
            <p>
                call us today for your free estimate!
                <br>
                @ <a class="phone" href="tel:+1-501-514-3938">501-514-3938</a>
            </p>
        </div>
        
        <!-- JavaScript -->
        <script>
            <!-- Responsive Navbar -->
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }

            <!-- Slideshow -->
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
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
        
        <footer>
            <?php include 'common/footer.php'; ?>
        </footer>
    </body>
</html>
