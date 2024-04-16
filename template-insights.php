<?php

/* 
Template Name: Insights
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insights</title>

  <?php wp_head();?>
</head>
<body>

<main class="container">
  <?php get_header(); ?>

  <h1><?php the_title(); ?></h1>

  <?php get_template_part('includes/section', 'content'); ?>
</main>



<?php get_footer(); ?>

