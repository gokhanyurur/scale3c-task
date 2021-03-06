<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spectral
 */

get_header();
?>

    <article id="main">
        <header>
            <h2><?php echo get_the_title()  ?></h2>
            <?php
                $title_desc = get_field('title_description');
                if($title_desc):
                    echo '<p>'.$title_desc.'</p>';
                endif;
            ?>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </section>
    </article>

<?php
//get_sidebar();
get_footer();
