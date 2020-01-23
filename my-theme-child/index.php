<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My-Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		
	<?php include_once 'slider-features.php';?>
</div>
	<div class="" style="margin-left:11.5%;margin-right:16.5%;" >

	<div><p class="gallery-down">D'SIGN IS THE SOUL</p>
	
	<button  class="btn-my">view more</button>
	<hr>
</div>
</div>
	

	
<div class="" style="margin-left:11.5%;margin-right:16.5%;" >
		<div  class="gallrey-column"><img src="/wordpress1/wordpress/wp-content/uploads/2020/01/image-1-1.png" class="img-h-w"></img>
										
			</div>
				<div  class="gallrey-column">
				<img src="/wordpress1/wordpress/wp-content/uploads/2020/01/image-2.png" class="img-h-w"></img>
		
		</div>
		<div  class="gallrey-column"><img src="/wordpress1/wordpress/wp-content/uploads/2020/01/image-3.png" class="img-h-w"></img>
		
		</div>

<div  class="gallrey-column"><img src="/wordpress1/wordpress/wp-content/uploads/2020/01/image-4.png" class="img-h-w"></img>

</div>
<div  class="gallrey-column"><img src="/wordpress1/wordpress/wp-content/uploads/2020/01/image-5.png" class="img-h-w"></img>

</div>
<div  class="gallrey-column"><img src="/wordpress1/wordpress/wp-content/uploads/2020/01/image-6.png" class="img-h-w"></img>

</div>




</div>

</div>	
</div>
<div class="" style="margin-left:11.5%;margin-right:16.5%;" >
<hr>
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

<?php
get_sidebar();
get_footer();
