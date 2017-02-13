<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cult-man
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header__events-archive">
    <div class="widget__event-meta">
        <div class="widget__event-meta-time">
        <a href="<?php the_permalink(); ?>">
                       <?php
                        $date = get_post_meta(get_the_ID(), 'Время', true);
                        if (empty ($date)) {
                        echo (''); }
                        else {
                        echo ('&nbsp;'.(get_post_meta(get_the_ID(), 'Время', true)).'&nbsp;');}?>
                        </a>
        </div>
        <div class="widget__event-meta-date">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                        $date = get_post_meta(get_the_ID(), 'Дата', true);
                        if (empty ($date)) {
                        echo (''); }
                        else {
                        echo ('&nbsp;'.(get_post_meta(get_the_ID(), 'Дата', true)).'&nbsp;');}?>
                        </a>
    </div>
    </div>
    <div class="entry-header__events-archive-wrapper">
        <div class="entry-header__events-archive-wrapper-title">
        <? if ( is_single() ) :
			the_title( '<h1 class="entry-title-event">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title-event"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
    </div>
        <div class="entry-header__events-archive-wrapper-place">
                        <?php
                        $place = get_post_meta(get_the_ID(), 'Место', true);
                        if (empty ($place)) {
                        echo (''); }
                        else {
                        echo ('<i class="fa fa-map-o" aria-hidden="true"></i> '.(get_post_meta(get_the_ID(), 'Место', true)));}?>
        </div>
    </div>

	</header><!-- .entry-header -->

	<div class="entry-content">
	<?	if ( is_single() ) :
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Подробнее %s', 'cult-man' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cult-man' ),
				'after'  => '</div>',
			) );;
		else :

		endif; ?>
	</div><!-- .entry-content -->
<div class="thumbnail-my">
<?php if ( is_single() ) : the_post_thumbnail('full');
    else : ;
    endif;?>
</div>
<!-- thumbnail-my -->
</article><!-- #post-## -->
