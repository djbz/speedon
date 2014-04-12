<br />
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
  				<div class="panel-heading text-center"><h1>Je suis un donneur...</h1></div>
  				<div style="color : black; text-align:justify"  class="panel-body">
    				<div class="container col-md-12">
						<?php echo $this->Form->create('Donneur');?>
							<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('nom', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Nom')); ?>
                            </div>
                        </div>
                        <br />
						<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('prenom', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Prénom')); ?>
                            </div>
                        </div>
                        <br />
						<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('mail', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Adresse email')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('adresse_postale', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Adresse postale')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('numero_tel', array('required' => 'required', 'label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Numéro de téléphone')); ?>
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
                                <input type="submit" class="btn btn-success span12" value="C'est parti !"/>
                                <?php echo $this->Form->end(); ?>
                           </div>
                      </div>
            </div>
		</div>
       </div>

</div>		
