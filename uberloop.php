


<?php 
$anchors = array( "ab", "ch", "im", "mp", "pv", "vy" );
$currentValue = 0;
?>

<?php while ( $currentValue <= count($anchors) ) : ?>

	<?php query_posts( array( 'category_name' => $anchors[$currentValue] ) ); ?>

		<?php if ( have_posts() ) : ?>

			<div class="section" data-anchor="<?php echo '#' . $anchors[$currentValue]; ?>">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'slide' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div>

		<?php else : ?>

		<?php endif; ?>

	</div>

	<?php wp_reset_query(); ?>
	<?php $currentValue++; ?>

<?php endwhile; ?>