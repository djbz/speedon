


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h5><?php echo h($asso['Association']['nom_asso']); ?></h5>

                    <div class="row">
                    	<div class="col-md-2 text-center col-md-offset-5">
                        	<?php if ($asso['Association']['photo'] != "") echo $this->Html->image($asso['Association']['photo'], array('alt' => 'photo_profil', 'class' => 'img-responsive img-circle')); ?>
                    	</div>
                    </div>
                </div>

                <br/>

                <div class="panel panel-info col-md-10 col-md-offset-1">
                    <div class="panel-heading col-md-offset-0">
                        <h3 class="panel-title">Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Nom : </strong><?php echo h($asso['Association']['nom_asso']); ?><br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Mail : </strong><?php echo h($asso['Association']['mail']); ?><br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Adresse postale
                                    : </strong><?php echo h($asso['Association']['adresse_postale']); ?>
                                <br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <strong>Numéro de téléphone
                                    : </strong><?php echo h($asso['Association']['numero_tel']); ?>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-info col-md-10 col-md-offset-1">
                    <div class="panel-heading">
                        <h3 class="panel-title">Description</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo h($asso['Association']['description_longue']); ?>
                    </div>

                </div>


                <?php if ($this->Session->read('Auth.User.role') == 'Association' && $this->Session->read('Auth.User.id') == $asso['User']['id']) { ?>

                    <div class="row text-center">
                        <div class="col-md-4 col-md-offset-4">
                            <?php echo $this->Html->link(
                                'Modifier',
                                array('action' => 'edit', $asso['Association']['id']),
                                array('class' => 'btn btn btn-warning')
                            );
                            ?>

                        </div>
                    </div>

                <?php } ?>

                <?php if ($this->Session->read('Auth.User.role') == 'Donneur') { ?>

                    <div class="row text-center col-md-12">
                        <div class="col-md-4 col-md-offset-2">

                            <?php echo $this->Html->link(
                                'Ajouter aux favoris',
                                array('controller' => 'donneurs', 'action' => 'saveFavori', $asso['Association']['id']),
                                array('class' => 'btn btn-primary')
                            );
                            ?>

                        </div>

                        <div class="col-md-4">
                            <?php echo $this->Html->link(
                                'Faire un don',
                                array('controller' => 'dons', 'action' => 'donUnique', $asso['Association']['id']),
                                array('class' => 'btn btn-success')
                            );
                            ?>

                        </div>

                    </div>
					
                <?php } ?>
               <div class="row">
                	<div class="col-md-12 text-center">
						<hr />
                	</div>
                </div>
				<div class="row">
                	<div class="col-md-12 text-center">
                    	<?php echo $this->Html->link('Retour à la liste des associations', array('action' => 'index'), array('class' => 'btn btn-default')); ?>
                    </div>
                </div>

                <br />
			

            </div>
        </div>
    </div>

