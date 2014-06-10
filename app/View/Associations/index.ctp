<div class="container">


    <?php echo $this->Form->create(false, array('type' => 'post', 'class' => 'navbar-form navbar-right', 'role' => 'search')); ?>
    <div class="form-group">
        <?php echo $this->Form->input('nomAsso', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Nom Association')); ?>
    </div>
    <button type="submit" class="btn btn-default">Rechercher</button>
    <?php echo $this->Form->end(); ?>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading ">
                    <h1>Associations speedon</h1>
                </div>

                <div class="panel-body">

                    <?php foreach ($assos as $asso) { ?>
                        <a href="<?php echo $this->Html->url(array('controller' => 'Associations', 'action' => 'view',$asso['Association']['id'] )); ?>">
                        <div class="panel panel-info col-md-4 col-md-offset-1">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo h($asso['Association']['nom_asso']); ?></h3>
                            </div>
                            <div class="panel-body">
                                <?php if ($asso['Association']['photo'] != "") echo $this->Html->image($asso['Association']['photo'], array('alt' => 'photo_profil', 'class' => 'img-circle')); ?>
                            </div>
                        </div>
                        </a>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>

</div>