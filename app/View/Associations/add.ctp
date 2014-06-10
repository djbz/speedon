<br />
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
  				<div class="panel-heading text-center"><h5>Je représente une association...</h5></div>
  				<div style="color : black; text-align:justify"  class="panel-body">
    				<div class="container col-md-12">
						<?php echo $this->Form->create('Association');?>
							<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('nom_asso', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Nom de l\'association')); ?>
                            </div>
                        </div>
                        <br />
						<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('description_courte', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Courte description de l\'association')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('description_longue', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Description de l\'association')); ?>
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

                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('coord_bancaire', array('required' => 'required', 'label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Coordonnée bancaire')); ?>
                            </div>
                        </div>
                        <br />

                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                echo $this->Form->input('photo',
                                    array('type'=>'file', 'label'=>false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Photo')); ?>
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
