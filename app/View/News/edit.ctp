
<!-- Trouver moyen pour rentrer date en auto + administrateur_id -->
<br />
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h5>Édition d'une news</h5></div>
                <div style="color : black; text-align:justify"  class="panel-body">
                    <div class="container col-md-12">
                        <?php echo $this->Form->create('News'); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('titre', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Titre')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('texte', array('label' => false, 'class' => 'col-md-12 form-control', 'rows' => '5', 'placeholder' => 'Contenu')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->input('img', array('label' => false, 'class' => 'col-md-12 form-control', 'placeholder' => 'Lien image')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <hr />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php $options = array('label' => 'Modifier news', 'class' => 'btn btn-success span12'); ?>
                            <?php echo $this->Form->end($options); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>		
