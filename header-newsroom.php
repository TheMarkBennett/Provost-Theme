<!DOCTYPE html>
<html lang="en-us">
	<head>
		<?php wp_head(); ?>
	</head>
	<body ontouchstart <?php body_class(); ?>>
		<a class="skip-navigation bg-complementary text-inverse box-shadow-soft" href="#content">Skip to main content</a>
		<div id="ucfhb"></div>

		<?php do_action( 'after_body_open' ); ?>

		<header class="site-header">
			<?php echo ucfwp_get_header_markup(); ?>
      <div class="newsroom-header">
        <div class="container">
          <h2>News room</h2>
        </div>
      </div>
		</header>

		<main class="site-main">

			<div class="site-content" id="content" tabindex="-1">
