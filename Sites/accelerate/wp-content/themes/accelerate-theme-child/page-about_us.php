<?php
/**
 * The template for displaying the About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); 
$company_name = get_field('company_name'); 
$hero_text = get_field('hero_text'); 
?>

<div class="about-hero">
    <div class="about-text site-content">
        <p><span class="accelerate"><?php echo $company_name; ?></span> <?php echo $hero_text; ?></p>
    </div>
</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); 
            
            $main_title = get_field('main_title'); 
            $subtitle = get_field('subtitle'); 
            
            $service_1 = get_field('service_1'); 
            $description_1 = get_field('description_1'); 
            $image_1 = get_field('image_1'); 
            
            $service_2 = get_field('service_2'); 
            $description_2 = get_field('description_2'); 
            $image_2 = get_field('image_2'); 
            
            $service_3 = get_field('service_3'); 
            $description_3 = get_field('description_3'); 
            $image_3 = get_field('image_3'); 
            
            $service_4 = get_field('service_4'); 
            $description_4 = get_field('description_4'); 
            $image_4 = get_field('image_4'); 
            $size = "full"; 
            
            $contact_text = get_field('contact_text'); 
            $button_text = get_field('button_text'); 
            $button_link = get_field('button_link'); 
            
            ?>
			
            <div class="container">
                <div class="row">
                   <div class="intro">
                        <h4 class="about"><?php echo $main_title; ?></h4>
                        <p class="lead"><?php echo $subtitle; ?></p>
                    </div><!-- .intro --> 
                </div><!-- .row -->

                <div class="row">
                    <div class="col-sm-4">
                        <?php 
                            if ($image_1) { 
                                echo wp_get_attachment_image( $image_1, $size ); 
                            } 
                        ?>
                    </div><!-- .col-sm-4 -->
                    <div class="col-sm-8">
                        <div class="description">
                            <h2><?php echo $service_1; ?></h2>
                            <p><?php echo $description_1; ?></p>
                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->

                </div><!-- .row -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="description">
                            <h2><?php echo $service_2; ?></h2>
                            <p><?php echo $description_2; ?></p>

                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->
                    <div class="col-sm-4">
                        <?php 
                            if ($image_2) { 
                                echo wp_get_attachment_image( $image_2, $size ); 
                            } 
                        ?>
                    </div><!-- .col-sm-4 -->

                </div><!-- .row -->

                <div class="row">
                    <div class="col-sm-4">
                        <?php 
                            if ($image_3) { 
                                echo wp_get_attachment_image( $image_3, $size ); 
                            } 
                        ?>
                    </div><!-- .col-sm-4 -->
                    <div class="col-sm-8">
                        <div class="description">
                            <h2><?php echo $service_3; ?></h2>
                            <p><?php echo $description_3; ?></p>

                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->

                </div><!-- .row -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="description">
                            <h2><?php echo $service_4; ?></h2>
                            <p><?php echo $description_4; ?></p>
                        </div><!-- .description -->

                    </div><!-- .col-sm-8 -->
                    <div class="col-sm-4">
                        <?php 
                            if ($image_4) { 
                                echo wp_get_attachment_image( $image_4, $size ); 
                            } 
                        ?>
                    </div><!-- .col-sm-4 -->
                </div><!-- .row -->
            </div><!-- .container -->
            
			<?php endwhile; // end of the loop. ?>

    
  	
	<div class="call-to-action">
        <p><?php echo $contact_text; ?></p>
        
        <a href="<?php echo $button_link; ?>" class="button"><?php echo $button_text; ?></a>

    </div>

        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>