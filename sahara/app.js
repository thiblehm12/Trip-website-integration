function toggleSidebar(){
    document.getElementById("navbar").classList.toggle('active');
};

$("#slide").click( function() {
    $(".icon").toggleClass("close");
});
function redirect1() {
    window.location = "page1.php";
 }
 function redirect2() {
    window.location = "page2.php";
 }
 function redirect3() {
    window.location = "page3.php";
 }
 function redirect4() {
    window.location = "page4.php";
 }
 function redirect5() {
   window.location = "index.php";
}
function redirect6() {
   window.location = "book.php";
}

/*--------carousel-------------*/

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