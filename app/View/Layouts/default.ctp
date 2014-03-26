<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('ui-lightness.jquery-ui-1.10.3');
		
		echo $this->Html->script('jquery-2.0.3'); // Intégration de jQuery
		echo $this->Html->script('jquery-ui-1.10.3'); // Intégration de jQueryUI
		echo $this->Html->script('bootstrap'); // Script de Bootstrap

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
</body>
</html>
