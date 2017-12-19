<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OIR_Temsops
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="ui basic mtb0 segment site-footer">
		<div class="ui two column grid stackable middle aligned">
			<div class="column">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'oirtemsops' ) ); ?>">
						&copy; TemsOps International
					</a>
				</div><!-- .site-info -->
			</div>
			<div class="column right aligned footer-icons">
				<a href="#"><i class="circular facebook f icon"></i></a>
				<a href="#"><i class="circular twitter icon"></i></a>
				<a href="#"><i class="circular youtube icon"></i></a>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-menu" class="mobile-menu" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
</nav><!-- #site-navigation -->

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(function() {
            FastClick.attach(document.body);
        });
        $('#mobile-menu').mmenu({
            'extensions': [
                'pagedim-black',
                'theme-dark'
            ],
            'navbar': {
                'add': true
            },
            'navbars': [
                {
                    'position': 'top'
                },
                {
                    'position': 'bottom',
                    'content': [
                        '<a href="#/" title="Follow Our Facebook"><i class="facebook f icon"></i></a>',
                        '<a href="#/" title="Follow Our Twitter"><i class="twitter icon"></i></a>',
                        '<a href="#/" title="Follow Our Instagram"><i class="instagram icon"></i></a>',
                    ]
                }
            ]
        });
        var API = $("#mobile-menu").data( "mmenu" );
        $(".menu-toggle").click(function() {
            API.open();
        });
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
