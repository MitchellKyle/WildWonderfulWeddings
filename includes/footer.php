<!-- Footer -->
		<nav class="navbar navbar-default text-center footer">
			<div class="container-fluid">
				<ul class="soc navbar-left" style="display: none;">
			    <li><a class="soc-facebook" href="#"></a></li>
			    <li><a class="soc-twitter" href="#"></a></li>
			    <li><a class="soc-google" href="#"></a></li>
			    <li><a class="soc-instagram soc-icon-last" href="#"></a></li>
				</ul>
				<p class="navbar-right">&copy;2016 Wild and Wonderful Photography</p>
			</div>
		</nav>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- jQuery Mobile -->
<script src="js/jquery.mobile.custom.min.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Carousel Swipe Function -->
<script>
$(document).ready(function() {  
   $("#homeCarousel").swiperight(function() {  
      $("#homeCarousel").carousel('prev');  
    });  
   $("#homeCarousel").swipeleft(function() {  
      $("#homeCarousel").carousel('next');  
   });  
}); 
</script>
</body>
</html>