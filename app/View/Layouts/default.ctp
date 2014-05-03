<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$Description = __d('cake_dev', 'Poold: Social Ridesharing Made Simple');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $Description ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootswatch, Simplex Bootswatch base theme styles-->
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/simplex/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
	<!--Custom styles-->
	<?php echo $this->Html->css('styles');?>

	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>
	<?php echo $this->Session->flash(); ?> <!--NEEDS FIX-->
	<!--NAVBAR-->
	<?php echo $this->Element('navbar') ?>
	<?php echo $this->fetch('content'); ?>
	<div id="footer">
		<?php echo $this->Element('footer') ?>
	</div>
	
<!--jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!--Bootstrap js-->
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--<?php echo $this->element('sql_dump'); ?>--> <!--Note this out for DebugKit-->
</body>
</html>
