<?php
$active = "home";
$pageTitle = "Wild and Wonderful | Full Frame Photography";

include("includes/header.php");

?>

<!-- Carousel -->
	<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
		<ol class="carousel-indicators">
			<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#homeCarousel" data-slide-to="1"></li>
			<li data-target="#homeCarousel" data-slide-to="2"></li>
			<li data-target="#homeCarousel" data-slide-to="3"></li>
			<li data-target="#homeCarousel" data-slide-to="4"></li>
		</ol>
		<!-- Carousel Inner -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="frame" src="img/joanna_baby.jpg" alt="A woman smiling looking down at a new born baby.">
			</div>
			<div class="item">
				<img class="frame" src="img/rings.jpg" alt="Two wedding rings sitting on top of a wedding ceremony bulletin">
			</div>
			<div class="item">
				<img class="frame" src="img/hands.jpg" alt="A male left hand with a female left hand over top showing wedding bands with a beautiful landscape of a lake and mountains in the background">
			</div>
			<div class="item">
				<img class="frame" src="img/glasses.jpg" alt="A close up picture of a woman's face wearing sunglasses on the right, with the photographer visible in the reflection of the glasses with a beach at sunset in the background on the left side">
			</div>
			<div class="item">
				<img class="frame" src="img/wedding1.jpg" alt="A wedding party outside, with the women holding bouquet on the left and the men with their hands in their pockets on the right and the bride and groom holding hands in the middle.">
			</div>
			<div class="item">
				<img class="frame" src="img/wedding2.jpg" alt="Black and white photo of groomsmen in a wedding party posing with one leg propped on a small stone wall, with their pant leg pulled up showing off colored American flag socks.">
			</div>
			<div class="item">
				<img class="frame" src="img/hat.jpg" alt="Close up picture of a Hispanic man wearing a hat with his arm propped up on the room of a car.">
			</div>
			<div class="item">
				<img class="frame" src="img/wedding3.jpg" alt="Two young women posing side by side and smiling big.">
			</div>
			<div class="item">
				<img class="frame" src="img/wedding4.jpg" alt="The father of the groom standing in a kitchen getting ready for the wedding, fastening his suspenders to his pants">
			</div>
			<div class="item">
				<img class="frame" src="img/baby.jpg" alt="A closeup pic picture of a young baby, he is outside wearing a heavy coat and a knitted sock hat">
			</div>
			<div class="item">
				<img class="frame" src="img/wedding5.jpg" alt="A bride walking outside holding her bouquet in one hand and the train of her dress in the other, smiling big.">
			</div>
		</div> <!-- end carousel inner -->

		<!-- Controls -->
		<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
			<span class="icon-prev"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
			<span class="icon-next"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- end carousel -->

	<div class="container-fluid text-center about">
		<h1 class="pacifico about-header">About Us</h1>
		<p>Wild and Wonderful Weddings provides full frame photography services year-round to clients in West Virginia, Virginia, Maryland, Delaware, D.C., Pennsylvania, and Kentucky. Arrangements can be made for service outside of these areas. <a href="contact.php">Contact us</a> today and ask about our special offers for the season!</p>
	</div>

<?php include("includes/footer.php"); ?>