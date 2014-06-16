<?php
$cakeDescription = __d('Speedon', 'Speedon : Le site de don facile et rapide !');
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
            <li><?php echo $this->Html->link('À propos',array('controller' => 'pages', 'action' => 'display','apropos')); ?></li>
            <li><?php echo $this->Html->link('Les associations',array('controller' => 'associations', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Les donneurs',array('controller' => 'donneurs', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('FAQ',array('controller' => 'FAQ', 'action' => 'index')); ?></li>
            <?php if (!$this->Session->check('Auth.User.id')){ ?><li><?php echo $this->Html->link('S\'inscrire',array('controller' => 'Users', 'action' => 'add')); ?></li><?php } ?>
			<li><?php echo $this->Html->link('Nous contacter',array('controller' => 'Contact', 'action' => 'index')); ?></li>
          </ul>
          <div class="navbar-right navbar-form">
          	
            <?php 
			if (!$this->Session->check('Auth.User.id')){
			echo $this->Html->link('Se connecter',array('controller' => 'users', 'action' => 'login'),array('class' => 'btn btn-success', 'target' => '_blank')); 
			}else{
				if($this->Session->read('Auth.User.role') == "Association"){
					echo "Bonjour <b>".$this->Html->link($this->Session->read('Auth.User.username'),array('controller' => 'associations', 'action' => 'view',$this->Session->read('Auth.User.Association.id')))."</b>&nbsp;&nbsp;";
				}
				if($this->Session->read('Auth.User.role') == "Donneur"){
					echo "Bonjour <b>".$this->Html->link($this->Session->read('Auth.User.username'),array('controller' => 'donneurs', 'action' => 'view',$this->Session->read('Auth.User.Donneur.id')))."</b>&nbsp;&nbsp;";
				}
				if($this->Session->read('Auth.User.role') == "Administrateur"){
					echo "Administrateur <b>".$this->Html->link($this->Session->read('Auth.User.username'),array('controller' => 'administrateurs', 'action' => 'manage'))."</b>&nbsp;&nbsp;";
				}
			echo $this->Html->link('Se deconnecter',array('controller' => 'users', 'action' => 'logout'),array('class' => 'btn btn-default', 'target' => '_blank')); 	
			}
			?>
        
        
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	
    <?php 
	echo $this->session->flash();
	echo $this->fetch('content'); 
	
	?>

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
