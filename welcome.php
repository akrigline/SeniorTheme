<div class="section" data-anchor="home" id="welcome">

  <div class="logo">
    <img class="col-xs-10 col-sm-6" src="<?php bloginfo('template_directory'); ?>/img/finefolk_logo.svg" alt="FINE FOLK LOGO">
    <div class="col-xs-10 col-sm-6 col-sm-offset-3 hidden-xs show-info">
      <h1>FRIDAY 04.24.15</h1>
      <h2>Professionals: 4:30PM–6:00PM</h2>
      <h2>Family and Friends: 6:00PM–8:00PM</h2>
      <h4>EMILY DAVIS GALLERY, FOLK HALL<br>
      150 E. EXCHANGE ST.<br>
      AKRON, OH 44325-7801</h4>
    </div>
  </div>
		
		<ul class="list-unstyled">

  <?php query_posts('orderby=rand'); ?>
  
  <?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
          $slug = $post->post_name;
					$image = get_field('main_image');
					$img_url = $image['sizes']['medium'];
					$img_alt = $image['alt'];

          $category = get_the_category(); 

				?>
			
        <li>
          <a href="<?php echo '#' . $category[0]->cat_name . '/#' . $slug; ?>">
            <figure>
              <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
              <figcaption>
                <h5><?php the_title(); ?></h5>
              </figcaption>
            </figure>
          </a>
        </li>

			<?php endwhile; // end of the loop. ?>
  <?php else : ?>

  <?php endif; ?>
  <?php wp_reset_query(); ?>

  <?php query_posts('posts_per_page=12&orderby=rand'); ?>
  
  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          $slug = $post->post_name;
          $image = get_field('small_1');
          $img_url = $image['sizes']['medium'];
          $img_alt = $image['alt'];

          $category = get_the_category(); 

        ?>
      
        <li>
          <a href="<?php echo '#' . $category[0]->cat_name . '/#' . $slug; ?>">
            <figure>
              <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
              <figcaption>
                <h5><?php the_title(); ?></h5>
              </figcaption>
            </figure>
          </a>
        </li>

      <?php endwhile; // end of the loop. ?>
  <?php else : ?>

  <?php endif; ?>
  <?php wp_reset_query(); ?>

  
		</ul>

</div>