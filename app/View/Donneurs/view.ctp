<br />
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h5><?php echo 'Profil de '.h($donneur['User']['username']); ?></h5>
                    <div class="row">
                        <?php if($donneur['Donneur']['photo'] != "") echo $this->Html->image($donneur['Donneur']['photo'], array('alt' => 'photo_profil', 'class' => 'img-circle')); ?>
                    </div>
                </div>
                <?php if($donneur['User']['id'] == $this->Session->read('Auth.User.id')){
                        echo '<div class="col-md-8">';
                    }
                    else {
                        echo '<div class="col-md-12 col-md-offset-3">';
                    }  
                ?>
                    <div class="row">
                        <div class="col-md-offset-1"><h5>Total des dons : <b><?php echo $totalDon; ?>€</b></h5></div>
                    </div>

                    <div class="row">
                       <div class="col-md-offset-1"><h5>Récompenses</h5></div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-offset-1">
                    <?php
                            if(count($donneur['Recompense']) > 0){
                                foreach($donneur['Recompense'] as $recompense){
                                        echo '<div style="display:block;float:left;width:130px;margin-left:10px;text-align:center;">' . '<span>' .
                                                $this->Html->link($recompense['titre'],array('controller' => 'recompenses', 'action' => 'view', $recompense['id'])) . '</span><br/>' .
                                                $this->Html->image($recompense['photo'], array('alt' => $recompense['titre'], 'title' => $recompense['condition_obtention'])) .
                                                '</div>';// TODO : ADAPTER POUR LINKER VERS LA DESCRIPTION D'UNE RECOMPENSE
                                }
                            } else{
                                         echo '<span style="margin-right:10px;">Aucune</span>';    
                            }
                    ?>
                        </div>
                    </div>
                    <!-- pour annuler le float -->
                    <div style="clear:both;"></div>

                    <div class="row">
                       <div class="col-md-offset-1"><h5>Associations favorites</h5></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-offset-1">
                            <?php
                                    if(count($donneur['Association']) > 0){
                                        foreach($donneur['Association'] as $asso){
                                                echo '<span style="margin-right:10px;">' . $this->Html->link($asso['nom_asso'],
                                            array('controller' => 'associations', 'action' => 'view', $asso['id']),
                                            array('class' => 'btn btn btn-success')) . '</span>'; 
                                        }
                                    
                                     } else{
                                         echo '<span style="margin-right:10px;">Aucune</span>';    
                                    }
                                    
                            ?>
                        </div>
                    </div><br/>
                    <?php if($donneur['User']['id'] == $this->Session->read('Auth.User.id')){   //si le donneur consulte SON PROFIL?>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1" style="padding-left:0px;">
                            <?php echo $this->Html->link(
                                   'Consulter mes dons',
                                   array('action' => 'view_dons', $donneur['Donneur']['id']),
                                   array('class' => 'btn btn btn-success')
                                );
                            ?>
                            </div>
                        </div>
                    <?php } ?>
                    <br/><br/>
                </div>
                <?php if($donneur['User']['id'] == $this->Session->read('Auth.User.id')){//si le donneur consulte SON PROFIL?>
                <div class="col-md-4">
                    <br/>
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
                    <br/>
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
                    <br/>
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
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4">
                    </div>
                    <!-- end IF -->
                </div>
                <?php 
                    } // en if utilisateur sur son profil 
                    else{
                ?>
                    <div class="row text-center">
                        <div class="col-md-4 col-md-offset-4"><!-- vide sinon bug affichage... -->   
                        </div>
                    </div>
                <?php     }
                ?>
                
                <div class="row">
                	<div class="col-md-12 text-center">
                    	<?php echo $this->Html->link('Retour à la liste des donneurs', array('action' => 'index'), array('class' => 'btn btn-default')); ?>
                    </div>
                </div>

                <br />
            </div>
        </div>
    </div>
