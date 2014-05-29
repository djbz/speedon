<!-- Fichier: /app/View/Donneurs/edit.ctp -->

<br />
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h1>Modifier ses informations</h1></div>
                <div style="color : black; text-align:justify"  class="panel-body">
                    <div class="container col-md-12">    
                    
                        <div class="row">
                            <div class="col-md-12">
                        <?php // RAJOUTER CONTRAINTES
                            echo $this->Form->create('Donneur'); ?>
                            </div>
                        </div>      
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                        <?php echo $this->Form->input('password', 
                                array('type'=>'password', 'label'=>false, 
                                    'class' => 'col-md-12 form-control', 'placeholder' => 'Nouveau mot de passe', 'autocomplete'=>'off')); ?>
                            </div>
                        </div>       
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('re_password', 
                                array('type'=>'password', 'label'=>false, 
                                    'class' => 'col-md-12 form-control', 'placeholder' => 'Resaisissez le nouveau mot de passe', 'autocomplete'=>'off')); ?>
                            </div>
                        </div> 
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('nom', 
                                    array('type'=>'text', 'label'=>false,
                                        'class' => 'col-md-12 form-control', 'placeholder' => 'Nom')); ?>
                            </div>
                        </div>       
                        <br />
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('prenom', 
                                array('type'=>'text', 'label'=>false, 
                                    'class' => 'col-md-12 form-control', 'placeholder' => 'Prénom')); ?>
                            </div>
                        </div>       
                        <br />
                        
                        <div class="row">
                            <div class="col-md-12">        
                                <?php echo $this->Form->input('mail', 
                                array('type'=>'email', 'label'=>false, 
                                    'class' => 'col-md-12 form-control', 'placeholder' => 'Mail')); ?>
                            </div>
                        </div>       
                        <br />
                        
                         <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('adresse_postale', 
                                array('type'=>'text', 'label'=>false, 
                                    'class' => 'col-md-12 form-control', 'placeholder' => 'Adresse')); ?>
                            </div>
                        </div>       
                        <br />
                        
                         <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('numero_tel', 
                                array('label'=>false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Numéro de téléphone')); ?>
                            </div>
                        </div>       
                        <br />
                        
                         <div class="row">
                            <div class="col-md-12">
                                <?php // COMMENT FAIRE ???
                                 echo $this->Form->input('photo', 
                                array('type'=>'file', 'label'=>false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Photo')); ?>
                             </div>
                        </div>       
                        <br />
                               
                         <div class="row">
                            <div class="col-md-12">
                                <?php // AUTRE SYSTEME ?
                                 echo $this->Form->input('coord_bancaire', 
                                array('label'=>false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Coordonnées bancaires')); ?>
                            </div>
                        </div>       
                        <br />
                        
                         <div class="row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                      <?php // AUTRE SYSTEME
                                        echo $this->Form->input('don_mensuel', 
                                        array('type'=>'checkbox')); ?>
                                    </label>
                                </div>  
                            </div>
                        </div>       
                        <br />
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php // AUTRE PAGE ??
                                echo $this->Form->input('montant_don_mensuel', 
                                array('label'=>false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Montat du don mensuel')); ?>
                            </div>
                        </div>       
                        <br />
                        
                        <?php // obligatoire
                        echo $this->Form->input('id', array('type' => 'hidden')); ?>
                        <div class="row">
                          <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-success span12" value="Sauvegarder"/>
                                <?php echo $this->Form->end(); ?>
                           </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>	