<!-- Fichier : /app/View/Donneurs/view.ctp -->


<br />
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1><?php echo h($donneur['User']['username']); ?></h1>
                    <div class="row">
                        <?php if($donneur['Donneur']['photo'] != "") echo $this->Html->image($donneur['Donneur']['photo'], array('alt' => 'photo_profil', 'class' => 'img-circle')); ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-offset-1"><h2>TOTAL DES DONS : <b><?php echo $totalDon; ?>€</b></h2></div>
                    </div>

                    <div class="row">
                       <div class="col-md-offset-1"><h2>RECOMPENSES</h2></div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-offset-1">
                    <?php
                            foreach($donneur['Recompense'] as $recompense){
                                    echo '<div style="display:block;float:left;width:130px;margin-left:10px;text-align:center;">' . '<span>' .
                                            $this->Html->link($recompense['titre'],array('controller' => 'recompenses', 'action' => 'view', $recompense['id'])) . '</span><br/>' .
                                            $this->Html->image($recompense['photo'], array('alt' => $recompense['titre'], 'title' => $recompense['condition_obtention'])) .
                                            '</div>';// TODO : ADAPTER POUR LINKER VERS LA DESCRIPTION D'UNE RECOMPENSE
                            }
                    ?>
                        </div>
                    </div>
                    <!-- pour annuler le float -->
                    <div style="clear:both;"></div>

                    <div class="row">
                       <div class="col-md-offset-1"><h2>ASSOCIATIONS FAVORITES</h2></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-offset-1">
                            <?php
                                    foreach($donneur['Association'] as $asso){
                                            echo '<span style="margin-right:10px;">' . $this->Html->link($asso['nom_asso'],
                                        array('controller' => 'associations', 'action' => 'view', $asso['id']),
                                        array('class' => 'btn btn-lg btn-success active')) . '</span>'; // TODO : ADAPTER POUR LINKER VERS LA DESCRIPTION LONGUE D'UNE ASSSO
                                    }
                            ?>
                        </div>
                    </div>
                    <br/><br/>
                    
                </div>
                <div class="col-md-3">
                    <!-- si le donneur consulte SON PROFIL -->
                    <b>SI L'UTILISATEUR EST SUR SON PROFIL (SINON CACHE)</b><br/><br/><br/>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Nom : </strong><?php echo h($donneur['Donneur']['nom']); ?><br/>
                        </div>
                    </div>      
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Prenom : </strong><?php echo h($donneur['Donneur']['prenom']); ?><br/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Mail : </strong><?php echo h($donneur['Donneur']['mail']); ?><br/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Adresse postale : </strong><?php echo h($donneur['Donneur']['adresse_postale']); ?><br/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Numéro de téléphone : </strong><?php echo h($donneur['Donneur']['numero_tel']); ?><br/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Don mensuel : </strong><?php echo h($donneur['Donneur']['don_mensuel']) ? "activé" : "désactivé"; ?><br/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Coordonnées bancaires : </strong><?php echo h($donneur['Donneur']['coord_bancaire']); ?><br/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                            <strong>Montant du don mensuel : </strong><?php echo h($donneur['Donneur']['montant_don_mensuel']); ?>€<br/>
                        </div>
                    </div>                   
                </div>                
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4">
                        <?php echo $this->Html->link(
                                    'Modifier',
                                    array('action' => 'edit', $donneur['Donneur']['id']),
                                    array('class' => 'btn btn-lg btn-block btn-warning active')
                                 );
                            ?>
                          
                    </div>
                    <!-- end IF -->
                </div>
            </div>
        </div>
    </div>
</div>
