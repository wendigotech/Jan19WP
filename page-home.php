<?php
get_header(); ?>

<?php get_template_part( 'content', 'Hero' ); ?><div class="hero__sub">
        <span id="scrollToNext" class="scroll"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/>
            </svg> </span>
    </div><div class="steps landing__section">

        <div class="container"><?php the_content(); ?></div>
    </div><h2 class="text-center text-uppercase"><?php _e( 'News', 'jan19' ); ?></h2><?php get_template_part( 'content', 'news' ); ?>
<?php
    $value_args = array(
        'tag' => 'value'
    )
?><?php $value = new WP_Query( $value_args ); ?><?php if ( $value->have_posts() ) : ?><?php while ( $value->have_posts() ) : $value->the_post(); ?><div class="expanded landing__section">
        <div class="container"><?php the_content(); ?></div>
    </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?><div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/together.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title"><?php _e( 'Ready for production or rapid prototyping', 'jan19' ); ?></h2>
                <p class="expanded__text"><?php _e( 'Landing, authentication and a few other pages to select from, despite the small size. Tested on production at unDraw with amazing speeds and unopinionated on how to structure your project. We really hope you\'ll find it awesome and useful!', 'jan19' ); ?></p>
            </div>
        </div>
    </div>
</div>







<?php get_footer(); ?>