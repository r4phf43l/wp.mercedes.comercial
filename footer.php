</div> <!-- .main -->

<footer id="site-footer" class="site-footer" role="contentinfo">
	<div class="design-credit"><?php get_template_part( 'menu', 'home' ); ?>
<?php
	$user_footer_text = get_theme_mod('mcbra_footer_text_setting');
	$site_url = 'http://www.rafaantonio.com/mercedes/';
	$footer_text = sprintf( __( 'Comunimax &copy; 2019', 'tracks' ), esc_url( $site_url ) );
	echo ($user_footer_text) ? $user_footer_text . ' | ': '';
	echo $footer_text;
?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>