</div>
		<!-- end content -->
	
	</div>
	<!-- end wrapper -->
	<!-- begin footer -->
	<!--<footer>
		<div id="footerInner">
		
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>
		
		</div>
	</footer>-->
	<div id="copyright">
		<div id="copyrightInner">
			<?php if (of_get_option('alltuts_copyright') <> ""){
			echo stripslashes(stripslashes(of_get_option('alltuts_copyright')));
			}else{
				echo 'Chúng tôi chi hội Vòng Tay Ấm';
			}?>
		<div id="site5bottom">©2018 by VongTayAm.vn</div>
		</div>
	</div>
	<!-- end footer -->
<?php if (of_get_option('alltuts_analytics') <> "") { 
		echo stripslashes(stripslashes(of_get_option('alltuts_analytics'))); 
	} ?>
	<?php wp_footer(); ?>
</body>
</html>
