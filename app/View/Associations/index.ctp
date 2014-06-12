<br />
<div class="container">
    
    

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading ">
                    <h5 class="text-center">Nos associations</h5>
                </div>

                <div class="panel-body">
					<div class="row">
        				<div class="col-md-12">
							<?php echo $this->Form->create(false, array('type' => 'post', 'class' => 'navbar-form navbar-right', 'role' => 'search')); ?>
    						<div class="form-group">
        						<?php echo $this->Form->input('nomAsso', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Nom de l\'association')); ?>
                            </div>
                            <button type="submit" class="btn btn-default">Rechercher</button>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                    <hr />
    					
   				 
                    
					<?php if(count($assos) == 0){ echo "Aucune association pour le moment."; }else{ ?>
					<?php  foreach ($assos as $asso) { ?>
                        <a href="<?php echo $this->Html->url(array('controller' => 'Associations', 'action' => 'view',$asso['Association']['id'] )); ?>">
                        <div class="panel panel-info col-md-4 col-md-offset-1">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><?php echo h($asso['Association']['nom_asso']); ?></h3>
                            </div>
                            <div class="panel-body">
                                <?php if ($asso['Association']['photo'] != "") echo $this->Html->image($asso['Association']['photo'], array('alt' => 'photo_profil', 'class' => 'img-responsive img-circle')); ?>
                            </div>
                        </div>
                        </a>
                    <?php } } ?>

                </div>

            </div>
        </div>
    </div>
