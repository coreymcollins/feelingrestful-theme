<!DOCTYPE html>
<html>
<head>
	<?php wp_head() ?>
	<title><?php wp_title( '&middot;', true, 'right' ); ?> A Day of REST</title>

	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="//use.typekit.net/yjd8lkq.js"></script>
	<script>try {
			Typekit.load();
		} catch ( e ) {
		}</script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<?php if ( defined( 'HM_DEV' ) ) : ?>
		<script src="//localhost:35729/livereload.js"></script>
	<?php endif; ?>
	<?php do_action( 'opengraph' ); ?>
</head>

<body>
<!-- Start Sign-up Box -->

<div id="app"></div>

<?php wp_footer() ?>
</body>

</html>
