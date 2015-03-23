<div class="section" data-anchor="home" id="welcome">

  <div class="logo">
    <img class="col-xs-10 col-sm-6 col-md-6" src="img/finefolk_logo.svg" alt="FINE FOLK LOGO">
  </div>
	
	<?php if ( have_posts() ) : ?>
		
		<ul class="list-unstyled">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					$link = get_field('link_to');
					$image = get_field('main_image');
					$img_url = $image['sizes']['thumbnail'];
					$img_alt = $image['alt'];
				?>
			
        <li>
          <a href="<?php echo $link; ?>">
            <figure>
              <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
              <figcaption>
                <h5><?php the_title(); ?></h5>
              </figcaption>
            </figure>
          </a>
        </li>

			<?php endwhile; // end of the loop. ?>

		</ul>

	<?php else : ?>

	<?php endif; ?>

</div>