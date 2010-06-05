<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().$style;?>"/>
<?php echo $script; ?>
<script src='<?php echo base_url(); ?>assets/jscript/linkOpener.js' type="text/javascript"></script>

</head>
<body>
<div class='wrapper'>
	<div class='header'>
		<h1><?php echo anchor(base_url(), $heading); ?></h1>
	</div>