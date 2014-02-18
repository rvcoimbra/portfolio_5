<?php get_header(); ?>

<?php if(!have_posts()):?>
<h1>Not found!!!</h1>
<p>Sem post para mostrar</p>
<?php endif;?>

<?php while(have_posts() ): the_post();?>

<div class="post">
  <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
  <div class="post-details">
    <div class="post-details-left"> Posted on <strong><?php the_date();?></strong> by <span class="author"><?php the_author();?></span> under <span class="author"><?php the_category(',');?></span> </div>
   <div class="post-details-right"> 
   
   <?php edit_post_link('Edit','<span class="comment-count">&nbsp;&nbsp;' , '</span>');?>
   
   <span class="comment-count">
   <?php comments_popup_link('Leave a comment','1 Comment' , '% Comments');?>
      </span> </div>  </div>
      
   <?php if(is_archive() || is_search()):?>
   
   <?php the_excerpt();?>
   
   <?php else:?>
   
   <?php the_content('Read More');?>
   
   <?php endif;?>
   
   
   

  <div class="dots"></div>
</div>
<!-- post -->
<?php endwhile;?>

<?php if ($wp_query->max_num_pages>1):?>
<div id="older-post">
<?php next_posts_link('Mais Antigo');?></div>


<div id="newer-post">
<?php previous_posts_link('Mais Recente');?></div>


<?php else:?>
<div id="only-page">Sem mais artigos</div>
<?php endif;?>


<?php get_footer(); ?>
