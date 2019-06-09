<div class="container">

  <!-- Full-width images with number text -->
<div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="e.jpg" style="width:100%; height:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="e1.jpg" style="width:100%; height:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="e2.jpg" style="width:100%; height:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="e3.jpg" style="width:100%; height:100%">
  </div>
<div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="e4.jpg" style="width:100%; height:100%">
  </div>
<div class="mySlides">
    <div class="numbertext">6/ 6</div>
      <img src="e5.jpg" style="width:100%; height:100%">
  </div>

  
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>


</div>
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
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
 
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>