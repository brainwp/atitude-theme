<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="keywords" content="<?php bloginfo('description'); ?>; atitude; conhecimento; educação; ciências; ensino; coleção, livro didático; maria teresinha figueiredo; maria cecilia guedes condeixa" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17066443-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
global $page_sort;	
	if(get_settings('mistylook_sortpages')!='')
	{ 
		$page_sort = 'sort_column='. get_settings('mistylook_sortpages');
	}	
	global $pages_to_exclude;
	
	if(get_settings('mistylook_excludepages')!='')
	{ 
		$pages_to_exclude = 'exclude='. get_settings('mistylook_excludepages');
	}	
?>
<?php wp_head(); ?>
</head>
<body id="section-index">

<div id="cabecalho">
</div>

<div id="menu-maior">

<div id="menu">
<ul>
	<!-- <li <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>/" title="Home">Home</a></li> -->
		<?php wp_list_pages('exclude=63,65,368,375,424,428,440&title_li=&depth=1&'.$page_sort.'&'.$pages_to_exclude)?>
<div id="feedarea">
<dl>
	<dt><strong></strong></dt>
	<dd><a href="<?php bloginfo('rss2_url');?>">&nbsp;Assine nosso RSS</a></dd>
	
<!-- <dd><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></dd> -->		

</dl>
</div><!-- end id:feedarea -->

</ul>
</div>
</div>
<div id="container">

