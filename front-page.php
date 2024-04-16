<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <?php wp_head();?>
</head>
<body>

  <?php get_template_part('includes/section', 'homeHeader'); ?>  

  <main>
    <?php get_template_part('includes/section', 'homeWorkingWith'); ?>  
    <?php get_template_part('includes/section', 'homeServices'); ?>  
    <?php get_template_part('includes/section', 'homeWeProvide'); ?>  
    <?php get_template_part('includes/section', 'homeProducts'); ?>  
    <?php get_template_part('includes/section', 'homeContactUs'); ?>  
    <?php get_template_part('includes/section', 'homeReviews'); ?>  
  </main>



<?php get_footer(); ?>
