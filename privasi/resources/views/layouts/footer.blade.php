<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileits_w3layouts_footer_grids">
				<div class="col-md-4 agileits_w3layouts_footer_grid">
                                    <h3 style="color: yellow">Penjelasan UKM</h3>
					<p>qweqweqwewqeqweqeqewqeqweqweqwe
                                        qweqweqweqweqweqweq
                                        weqwe</p>
				</div>
				<div class="col-md-4 agileits_w3layouts_footer_grid">
					<h3 style="color: yellow">Aktivitas Terbaru</h3>
                                        <ul>
						<li><span>Inifinity</span></li>
						<li><span>Bazar</span></li>
					</ul>
				</div>
				<div class="col-md-4 agileits_w3layouts_footer_grid">
					<h3 style="color: yellow">E-mail</h3>
					<ul>
						<li><span>Email :</span> <a href="mailto:info@example.com">info@example1.com</a></li>
						<li><span>Enquiry :</span> <a href="mailto:info@enquiry.com">info@enquiry.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="wthree_copy_right">
		<div class="container">
			<p>© 2017 Elearn-Sion Progress. All rights reserved Progress 2017</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{url('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
