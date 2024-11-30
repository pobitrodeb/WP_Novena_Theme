<?php
/*
	Template Name: Home Template
*/
	get_header(); 
?>

<?php get_template_part('template-parts/content', 'slider') ?>

<?php get_template_part('template-parts/content', 'features') ?>

<?php get_template_part('template-parts/content', 'about') ?>

<?php get_template_part('template-parts/content', 'cta') ?>

<?php get_template_part('template-parts/content', 'service') ?>

<?php get_template_part('template-parts/content', 'appoinment') ?>

<?php get_template_part('template-parts/content', 'testimonial') ?>

<?php get_template_part('template-parts/content', 'clients') ?>

<?php get_footer();?> 
