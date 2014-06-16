<br />
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
  				<div class="panel-heading text-center"><h5>Connexion à Speedon</h5></div>
  				<div style="color : black; text-align:justify"  class="panel-body">
    				<div class="container col-md-12">
                        <?php echo $this->Form->create('User'); ?>
                        <div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('username', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Nom d\'utilisateur')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('password', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Mot de passe')); ?>
                            </div>
                        </div>
                        <br />
                      </div>
                      <div class="row">
                          <div class="col-md-12 text-center">
                          	<hr />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-success span12" value="Se connecter !"/>
                                <?php echo $this->Form->end(); ?>
                           </div>
                      </div>
            </div>
		</div>
       </div>

</div>		
