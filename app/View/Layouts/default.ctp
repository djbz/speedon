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

<div id="clouds">
    <div class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Speedon',array('controller' => 'pages', 'action' => 'display', 'home'), array('class' => 'navbar-brand')); ?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">À propos</a></li>
            <li><?php echo $this->Html->link('FAQ',array('controller' => 'FAQ', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('S\'inscrire',array('controller' => 'Users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link('Nous contacter',array('controller' => 'Contact', 'action' => 'index')); ?></li>
          </ul>
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Adresse mail" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Mot de passe" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Se connecter</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	
    <?php echo $this->fetch('content'); ?>

      <hr>
      <footer>
        <p>&copy; Speedon 2013-2014</p>
      </footer>

      <div class="cloud x1"></div>
      <div class="cloud x2"></div>
      <div class="cloud x3"></div>
      <div class="cloud x4"></div>
      <div class="cloud x5"></div>

    </div> <!-- /container -->
  </div>
	
			

			
		
</body>
</html>
