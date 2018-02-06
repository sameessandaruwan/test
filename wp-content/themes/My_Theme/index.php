<?php get_header(); ?>


<section class="container-fulid slider-section">
  <div class="slider">
    <div class="logo-section">
      <div class="logo">
        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }?>
        <!-- <img src="<?php echo get_template_directory_uri();  ?>/images/logo.png" alt=""> -->
      </div>
    </div>
    <div class="slider-description">
      <div class="slider_content col-md-4 col-md-offset-4">
        <?php 
$id=14; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
?>
      </div>
      <div class="slide-infobox col-md-3 col-md-offset-1 hidden-xs">
      <div class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <?php  
    $post_id  = 16; // post id = 10
    $post_data  = get_post($post_id);
    $contents   = $post_data->post_content; // get all post details
    $contents   = apply_filters('the_content', $contents); // filter to get post content 
    $contents   = str_replace(']]>', ']]>', $contents);
    echo $contents;
      ?>
      
    </div>
    </div>
    
  </div>
</section>
<section class="main-content-wapper container-fulid">
  <div class="container">
    <h1>Welcome to Pilot Beach Resort</h1>
      <p>On the northwest shoreline of Crete, Greece, in the bay of Almyros next to the picturesque fishing village of Georgioupolis, halfway between Chania and Rethymno, which retain traditional Cretan elements with a cosmopolitan atmosphere, lies Pilot Beach Resort. <br/> <br/>

      Pilot Beach Resort with its spacious stylish public areas and unique Cretan architecture is set upon an area of olive and avocado trees right on the sandy beach of Georgioupolis offering spectacular views of the Aegean Sea and the famous White Mountains. Whilst it is considered to be among the finest five star hotels in Crete as it offers services of the highest standards alongside the well-known authentic Cretan Hospitality.</p>
      <button class="btn read_more">READ More</button>
  </div>
</section>

<div id="container">

  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

     <div class="post" id="post-<?php the_ID(); ?>">

    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?></a></h2>

    <div class="entry">

             <?php the_content(); ?>

        <p class="postmetadata">
<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> 
<?php  the_author(); ?><br />
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
        </p>

      </div>

    </div>

  <?php endwhile; ?>

    <div class="navigation">
      <?php posts_nav_link(); ?>
    </div>


  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>