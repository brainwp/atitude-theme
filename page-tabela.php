<?php  /* Template Name: Tabela */  
get_header(); ?>
<div id="content">
<div id="tabeladev-geral">

<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="posttitle">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<!-- <p class="post-info"><?php the_time('M jS, Y') ?> por <?php the_author_posts_link() ?> <?php edit_post_link('Editar', '', ' | '); ?> </p> -->
				</div>
				
				<div class="entry">
					<?php the_content(); ?>	
					<?php wp_link_pages(); ?>				
					<?php $sub_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>
					<?php if ($sub_pages <> "" ){?>
						<!-- <p class="post-info">This page has the following sub pages.</p> -->
						
					<?php }?>											
				</div>								
			</div>
					 <?php // comments_template(); ?>

		<?php endwhile; ?>
	<?php else : include_once(TEMPLATEPATH.'/notfound.php');?>
	<?php endif; ?>

</div><!-- end id:tabeladev-geral -->
</div><!-- end id:content -->
<?php get_footer();?>
