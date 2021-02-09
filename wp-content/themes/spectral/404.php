<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package spectral
 */

get_header();
?>

    <article id="main">
        <header>
            <h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'spectral' ); ?></h2>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'spectral' ); ?></p>
            </div>
        </section>
    </article>

<?php
get_footer();
