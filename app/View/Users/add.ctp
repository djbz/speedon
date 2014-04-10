<br />
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
  				<div class="panel-heading text-center"><h5>Rejoindre Speedon</h5></div>
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
                        <div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('repassword', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Confirmation du mot de passe')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                           		<?php 
									$options = array('Association' => 'Association', 'Donneur' => 'Donneur');
									echo $this->Form->select('role', $options ,array('label' => false, 'class' => 'col-md-12 form-control','value' => 'Donneur','required' => 'required')); ?>
                            </div>
						</div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 text-center">
                          	<hr />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-success span12" value="S'enregistrer"/>
                                <?php echo $this->Form->end(); ?>
                           </div>
                      </div>
            </div>
		</div>
       </div>

</div>		
