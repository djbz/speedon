<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="panel panel-default">
                <div class="panel-heading "><h1>Faire un don à <?php echo $asso['Association']['nom_asso']; ?></h1></div>
                <div style="color : black; text-align:justify"  class="panel-body">
                    <div class="container col-md-6 col-md-offset-3">
                        <?php // RAJOUTER CONTRAINTES
                            echo $this->Form->create('Don');
                        ?> 
                        <br/><br/>
                        <div class="row">
                            <div class="col-md-12">
                                 <?php echo $this->Form->input('montant', array('label'=>false, 'class' => '"col-md-3 form-control', 'placeholder' => 'Montat du don')); ?> 
                             </div>
                        </div> 
                        <br/><br/>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                  <input type="submit" class="btn btn-success span12" value="Donner :)"/>
                                  <?php echo $this->Form->end(); ?>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
