<?php 
/* 
    Template Name: Stay Page
*/ 
?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>



<section class="lg:py-12 py-10">
    <div class="container max-w-screen-sm px-4 lg:px-0  mx-auto py-4"> 
	
        <h1 class="text-3xl font-bold underline text-clifford">
        Hello world! Testing WEBSITE....
        </h1>
        <p class="text-2xl text-amber-300 font-bold">This is Git workflow testing...</p>
    </div>
	
</section>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>