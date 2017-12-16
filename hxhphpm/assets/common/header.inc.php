<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title; ?></title>
	<?php foreach( $css_files as $css ): ?>
		<link rel="stylesheet" type="text/css" media="screen, projection" href="assets/css/<?php echo $css; ?>">
	<?php endforeach; ?>
</head>
<body>

