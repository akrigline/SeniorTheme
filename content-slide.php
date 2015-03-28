<?php
/**
 * The template part for displaying each Slide.
 *
 * @package seniorshow
 */
?>

<?php 
	$slug = $post->post_name;

	$linkedIn = get_field('linkedin');
	$website = get_field('website');
?>

<section class="slide" data-anchor="<?php echo '#' . $slug; ?>">

  <div class="bottom-button">
    <a href="<?php echo '#' . $slug . '_collapse' ?>" data-toggle="collapse">
	    <h2><?php the_title(); ?></h2>
	    <p>ABOUT THE ARTIST</p>
    </a>
  </div>

  <div class="bottom-panel collapse" id="<?php echo $slug . '_collapse' ?>">
  <div class="col-xs-12 col-md-6">
    <div class="row">
    <?php $sampleNumber = 1 ?>
		<?php for ($i = 0; $i <= 2; $i++) : ?>
		  <?php 
		  	$imageSample = 'work_' . $sampleNumber;
		  	$sample = get_field($imageSample);
        $sampleNumber++;
			?>
      <?php if ($sampleNumber <= 3 ) : ?>
  	    <div class="work col-xs-12 col-sm-4 col-md-6">
  	       <img src="<?php echo $sample['url']; ?>" alt="<?php echo $sample['alt']; ?>">
  	    </div>
      <?php else : ?>
        <div class="work col-xs-12 col-sm-4 col-md-12">
           <img src="<?php echo $sample['url']; ?>" alt="<?php echo $sample['alt']; ?>">
        </div>
      <?php endif; ?>

		<?php endfor; ?>
    </div>
  </div>
    <div class="about col-xs-12 col-md-6">
	    <button class="btn btn-close" data-toggle="collapse" data-target="<?php echo '#' . $slug . '_collapse' ?>">
	      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357 357" xml:space="preserve">
	          <polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 
	        214.2,178.5"/>
	      </svg>
	    </button>
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1">
          <h1><?php the_title(); ?></h1>
          <a target="blank" href="<?php echo $linkedIn; ?>"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin.svg"> Connect on Linkedin</a>
          <a target="blank" href="<?php echo $website; ?>"><img src="<?php bloginfo('template_directory'); ?>/img/website.svg"> Visit Website</a>
          
          <?php the_content(); ?>
        </div>
      </div>

    </div><!-- about -->

  </div><!-- collapse -->

	<?php $imageMain = get_field('main_image'); ?>

  <div class="img-headshot slide-side hidden-xs hidden-sm col-md-6">

    <img src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>">

  </div><!-- left -->

  <div class="player">
    <div class="rounded">

    <?php
	    $webm = get_field('video_webm');
    	$mp4 = get_field('video_mp4');
    ?>

	    <video height="100%" loop class="hidden-xs">
	      <source src="<?php echo $webm['url'];; ?>" type="video/webm"/>
	      <source src="<?php echo $mp4['url']; ?>" type="video/mp4"/>
	    </video>

	    <img src="<?php echo $imageMain['url']; ?>" alt="<?php the_title(); ?>" class="visible-xs">
    </div><!-- rounded -->
  </div><!-- Player -->

  <div class="timeline">
    <div class="innerCircle">
    </div>
  </div>

  <div class="first col-xs-12 col-sm-4 col-md-6">

    <div class="slide-side right">
      <?php $portraitNumber = 1 ?>
			<?php for ($i = 0; $i <= 3; $i++) : ?>
			  <?php 
			  	$imageSmall = 'small_' . $portraitNumber; 
			  	$small = get_field($imageSmall);
          $portraitNumber++;
				?>

	      <div class="img-headshot col-xs-6">
	        <img src="<?php echo $small['url']; ?>" alt="<?php the_title(); ?>">
	      </div>

			<?php endfor; ?>

    </div><!-- right -->

  </div><!-- first -->

</section>