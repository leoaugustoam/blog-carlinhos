<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-item-wrap">

		<div class="post-inner-content">
			<header class="entry-header page-header">
				<div class="entry-meta">
					<?php sparkling_posted_on(); ?><?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><i class="fa fa-comment-o"></i><?php comments_popup_link( esc_html__( 'Leave a comment', 'sparkling' ), esc_html__( '1 Comment', 'sparkling' ), esc_html__( '% Comments', 'sparkling' ) ); ?></span>
				<?php endif; ?>

				<?php edit_post_link( esc_html__( 'Edit', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>

				</div><!-- .entry-meta -->
				<h1 class="entry-title" style="font-family: 'Oswald', sans-serif !important;
    color: black !important;
    text-align: center;
    line-height: 1.25em;
    font-size: 3em;"><a  style="" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<?php if ( 'post' == get_post_type() ) : ?>

				<?php endif; ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			 
			</a>
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<p><a class="btn btn-default read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'sparkling' ); ?></a></p>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content" style="text-align:justify;">

				<?php
				if ( get_theme_mod( 'sparkling_excerpts' ) == 1 ) :
					the_excerpt();
				else :
					the_content();
				endif;
				 ?>




				<?php
					wp_link_pages( array(
						'before'            => '<div class="page-links">'.esc_html__( 'Pages:', 'sparkling' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
		       		) );
		    	?>
			</div><!-- .entry-content -->
			<?php endif; ?>
		</div>

	</div>
	<div class="ad" style="margin-top:-3.8rem; margin-bottom: 1.2rem;">
				<?php echo dfads( 'groups=4&limit=1' ); ?>
	</div>

</article><!-- #post-## -->
