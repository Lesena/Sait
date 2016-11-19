	<!-- FOOTER -->
	
				<footer  id="yak1">
					<div id="footer-widgets">
    <div id="footer1">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
    <?php endif; ?>
    </div>
    <div id="footer2">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
    <?php endif; ?>
    </div>
    <div id="footer3">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
    <?php endif; ?>
    </div>
    </div>
    <div style="clear-both"></div>
				
				</footer><!-- //FOOTER -->
				

<div class="container_maps">
        <div class="row">
	      
		  <div class="col-md-4" style="visibility: visible; animation-name: fadeInUp;" id="content-sidebar">
		      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('content-sidebar') ) : ?>
    <?php endif; ?>

		  </div>
	  </div>
	
	</div>
<footer  id="tel">
<?php  wp_footer(); ?>
</footer><!-- //FOOTER -->
</div>
</body>
</html>