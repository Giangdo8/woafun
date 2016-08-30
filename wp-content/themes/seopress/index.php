<?php get_header(); ?>

<?php do_action('slideshow_deploy', '8'); ?>

<div class="col-md-12">
	<div class="left-content" >
		
		<?php if( is_category() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Category Archives: %s', 'seopress' ), single_cat_title( '', false ) ); ?></h1>
			</div>
				
			<?php
			// Show an optional term description.
			if( term_description() )
			{
				printf( '<div class="content-third">%s</div>', term_description() );
			}
			?>
				
		</div>
		<?php } ?>
		
		
		<?php if( is_tag() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Tag Archives: %s', 'seopress' ), single_tag_title( '', false ) ); ?></h1>
			</div>
				
			<?php
			// Show an optional term description.
			if( term_description() )
			{
				printf( '<div class="content-third">%s</div>', term_description() );
			}
			?>
				
		</div>
		<?php } ?>
		
		
		<?php if( is_author() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Author Archives: %s', 'seopress' ), get_the_author() ); ?></h1>
			</div>
				
			<?php
			// Show an optional term description.
			if( get_the_author_meta( 'description' ) )
			{
			?>
				<div class="content-third"><p><?php the_author_meta( 'description' ); ?></p></div>
			<?php
			}
			?>
				
		</div>
		<?php } ?>
		
		
		<?php if( is_search() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Search Results for: %s', 'seopress' ), get_search_query() ); ?></h1>
			</div>
				
		</div>
		<?php } ?>
		
		<?php get_sidebar();?>
		
		<?php
		if( have_posts() )
		{
			get_template_part( 'template-parts/content', 'loop' );
		}
		else
		{
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
	</div>
</div>

<?php get_footer(); ?>