<script src="<?php echo HTTP_SERVER; ?>lib/jquery-3.1.1/jquery-3.1.1.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/popper.min.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>lib/js/bootstrap.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>js/main.js"></script>
		<script src="<?php echo HTTP_SERVER; ?>js/Login.class.js"></script>
		
		<!-- <script src="lib/cliptwo/vendor/maskedinput/jquery.maskedinput.js"></script> -->
		<script >
			$(document).ready(function () {

				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
				var calcHeight = function() {
					$('#content-frame').height($(window).height() -40);
				}
				$(window).resize(function() {
					calcHeight();
				})
				calcHeight();

			});
			
						
		</script>
	</body>
</html>