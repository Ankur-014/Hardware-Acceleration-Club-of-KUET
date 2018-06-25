

<div class="container2">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/HACK/pc (1).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/HACK/pc (2).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/HACK/pc (5).jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/HACK/pc (8).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/HACK/pc (13).jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/HACK/pc (14).jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/HACK/pc (1).jpg" style="width:100%" onclick="currentSlide(1)" alt="2k17">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/HACK/pc (2).jpg" style="width:100%" onclick="currentSlide(2)" alt="Instructions">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/HACK/pc (5).jpg" style="width:100%" onclick="currentSlide(3)" alt="2k16">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/HACK/pc (8).jpg" style="width:100%" onclick="currentSlide(4)" alt="Attention">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/HACK/pc (13).jpg" style="width:100%" onclick="currentSlide(5)" alt="Girls">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/HACK/pc (14).jpg" style="width:100%" onclick="currentSlide(6)" alt="Instructors">
    </div>
  </div>
</div>

<script>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
