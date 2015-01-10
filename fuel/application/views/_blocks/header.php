<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
 	<title>
		<?php echo fuel_var('titlegrr')?> - <?php echo fuel_var('page_title')?>
	</title>

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/jquery.bxslider.css' rel='stylesheet' type='text/css'>
	<?php echo js('jquery').js($js); ?>
	<?php echo js('jquery.bxslider.js').js($js); ?>
	<?php echo js('main').js($js); ?>
	<?php
		echo css('main').css($css);

		if (!empty($is_blog)):
			echo $CI->fuel_blog->header();
		endif;
	?>

	<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
	</script>

</head>
<body>
	<div class="page">
		<div class="wrapper">
			<header class="page_header">
				<div class="logo"><object type="image/svg+xml" width="160" height="145" data="<?php echo img_path('_template_icons.svg#fuel') ?>"></object></div>
				<h1><?php echo fuel_var('heading')?></h1>
			</header>		
			<?php echo fuel_nav(array('container_tag_class' => 'mainnav', 'item_id_prefix' => 'topmenu_')); ?>