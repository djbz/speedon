<br />
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
  				<div class="panel-heading text-center"><h5>Mettre à jour une commande</h5></div>
  				<div style="color : black; text-align:justify"  class="panel-body">
    				<div class="container col-md-12">
						<?php echo $this->Form->create('Recompense'); ?>
							<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('titre', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Titre')); ?>
                            </div>
                        </div>
                        <br />
						<div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('condition_obtention', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Condition d\'obtention')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                        	<div class="col-md-12">
                           		<?php echo $this->Form->input('photo', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'URL de l\'image')); ?>
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
                                <input type="submit" class="btn btn-success span12" value="Modifier"/>
                                <?php echo $this->Form->end(); ?>
                                <?php echo $this->HTML->Link('Supprimer',array('controller' => 'Recompenses', 'action' => 'delete',$recompense['Recompense']['id']),array('class' => 'btn btn-danger'),'Etes-vous sûr de vouloir supprimer cette commande ?'); ?>
                           		<?php echo $this->HTML->Link('Liste des récompenses',array('controller' => 'Recompenses', 'action' => 'manage'),array('class' => 'btn btn-default')); ?>
                           </div>
                      </div>
            </div>
		</div>
       </div>

</div>		
