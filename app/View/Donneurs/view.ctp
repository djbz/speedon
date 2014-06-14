<br />
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h5><?php echo 'Profil de '.h($donneur['User']['username']); ?></h5>
                </div>
                <div class="panel-body" style="text-align: justify;">
                    <div class="row">
                    	<div class="col-md-2">
                        	<?php if($donneur['Donneur']['photo'] != "") echo $this->Html->image($donneur['Donneur']['photo'], array('alt' => 'photo_profil', 'class' => 'img-responsive img-thumbnail')); ?>
                    	</div>
                        <?php if($donneur['User']['id'] == $this->Session->read('Auth.User.id')){//si le donneur consulte SON PROFIL?>
                      	<div class="col-md-5">

                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Nom : </strong><?php echo h($donneur['Donneur']['nom']); ?><br/>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Prenom : </strong><?php echo h($donneur['Donneur']['prenom']); ?><br/>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Mail : </strong><?php echo h($donneur['Donneur']['mail']); ?><br/>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Adresse postale : </strong><?php echo h($donneur['Donneur']['adresse_postale']); ?><br/>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Numéro de téléphone : </strong><?php echo h($donneur['Donneur']['numero_tel']); ?><br/>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-5">

                    <div class="row">
                        <div class="col-md-12">
                            <strong>Don mensuel : </strong><?php echo h($donneur['Donneur']['don_mensuel']) ? "activé" : "désactivé"; ?><br/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Coordonnées bancaires : </strong><?php echo h($donneur['Donneur']['coord_bancaire']); ?><br/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Montant du don mensuel : </strong><?php echo h($donneur['Donneur']['montant_don_mensuel']); ?>€<br/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Montant du don mensuel : </strong><?php echo h($donneur['Donneur']['montant_don_mensuel']); ?>€<br/>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->Html->link(
                                        'Modifier',
                                        array('action' => 'edit', $donneur['Donneur']['id']),
                                        array('class' => 'btn btn btn-warning')
                                     );
                                ?>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                        <div class="col-md-12">
                             <br />
                             <hr /
                       </div>
                 </div>
                </div>
                <?php } ?>

                <div class="row">
                        <div class="col-md-12 text-center">
                             <h4>Total des dons : <b><?php echo $totalDon; ?>€</b></h4>
                       </div>
                 </div>
                 <div class="row">
                        <div class="col-md-12 text-center">
                             <h5>Associations favorites : </h5>
                       </div>
                 </div>
                 <div class="row">
                 	<div class="col-md-12 text-center">
                 	<?php
                    if(count($donneur['Association']) > 0){
                    	$i = 0;
						foreach($donneur['Association'] as $asso){
							if($i == 4){ ?>
								<div class="row">
							<?php $i=0; } ?>
                            	<div class="col-md-4 text-center">
									<?php echo $this->Html->link($asso['nom_asso'],array('controller' => 'associations', 'action' => 'view', $asso['id']),array('class' => 'btn btn-default col-md-12')); ?>
								</div>
                             <?php if($i == 4){ ?>
								</div>
							 <?php $i=0; } $i++; }
                             if($i!=0){ ?></div><?php }
                    } else{
                    	echo '<div class="col-md-12 text-center">Aucune association</div>';
                    }
                	?>

                	</div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                             <br />
                             <hr /
                       </div>
                 </div>

                 <div class="row text-center">
                       <div class="col-md-12"><h5>Récompenses</h5></div>
                 </div>

                  <div class="row">
                 		<div class="col-md-12 text-center">

                    <?php
                            if(count($donneur['Recompense']) > 0){
								$i = 1;
                                foreach($donneur['Recompense'] as $recompense){
									if($i == 4){ ?>
									<div class="row">
									<?php $i=0; } ?>
                                        <div class="col-md-3">
                                        	<?php echo $this->Html->image($recompense['photo'], array('alt' => $recompense['titre'], 'title' => $recompense['titre'], 'class' => 'img-responsive img-thumbnail')); ?>
                                        </div>

                                	<?php if($i == 4){ ?>
									</div>
									<?php $i=0; } $i++; }

                             		if($i!=0){ ?></div><?php }

                            		}else{
                                         echo '<span style="margin-right:10px;">Aucune</span>';
                            		}
                    			?>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-12">
                             <br />
                             <hr /
                       </div>
                 	</div>


                <div class="row">
                	<div class="col-md-12 text-center">
                    	<?php if($donneur['User']['id'] == $this->Session->read('Auth.User.id')){ echo $this->Html->link(
                                   'Consulter mes dons',
                                   array('action' => 'view_dons', $donneur['Donneur']['id']),
                                   array('class' => 'btn btn btn-success')
                                ); } ?>
                    	<?php echo $this->Html->link('Retour à la liste des donneurs', array('action' => 'index'), array('class' => 'btn btn-default')); ?>
                    </div>
                </div>

                <br />
               </div>
            </div>
        </div>
    </div>
