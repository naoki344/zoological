<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>
<?php if ( has_nav_menu( 'pan' ) ) : ?>
    <nav class="nav-breadcrumb">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'pan'
        ) );
        ?>
    </nav>
<?php endif; ?>
<?php
if(have_posts()): the_post();?>
    <div class="contents">
        <main>
            <article>
                <h1><?php the_title(); ?></h1>
                <section class="about_area">

                    <?php the_content(); ?>

                </section>
            </article>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php  endif; ?>

<?php get_footer();