			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<?php get_template_part('template-parts/footer'); ?>

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
		<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
		<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>
