<!--For important information
look at the book "WordPress web development for beginners from page 166 onwards "-->
<?php get_header();?>   <!--this gets the function get_header()  adn displays the header-->

<div id="main">

<div id="content">

<?php if(have_posts()):while(have_posts()): the_post(); ?>
<h1><?php the_title();?></h1>   <!--this gets the functions the_title-->
<h4>Posted on <?php the_time('F jS, Y') ?></p>
<p><?php the_content(__('(more..)'));?></p>
<hr> <?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no post available at this time.');
  ?></p><?php endif;?>



</div>
<?php get_sidebar();?>  <!--this gets the "get_sidebar() function"-->
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?> <!--this get the "get_footer" function displaying the footer-->
