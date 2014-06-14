<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="panel panel-default">
                <div class="panel-heading "><h5 class="text-center">Nos donneurs</h5></div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->Form->create(false, array('type' => 'post', 'class' => 'navbar-form navbar-right', 'role' => 'search')); ?>
                            <div class="form-group">
                                                    <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Nom de l\'utilisateur')); ?>
                            </div>
                            <button type="submit" class="btn btn-default">Rechercher</button>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <tr>
                        <th class="text-center"><h5><?php echo $this->Paginator->sort('User.username','Login'); ?></h5></th>
                                    <th class="text-center"><h5><?php echo 'Total des dons'; ?></h5></th>
                        </tr>     
                        <?php foreach($donneurs as $donneur): ?>
                        <tr>
                            <td>
                                <?php echo $this->Html->link($donneur['User']['username'],
                                        array('controller' => 'donneurs', 'action' => 'view', $donneur['Donneur']['id'])); ?>
                            </td>
                                    <td>
                                <?php echo $donneur['Donneur']['total_don'];?>
                            </td>
                        </tr>
                        <?php 
                                    endforeach;
                                    unset($donneur);
                            ?>
                    </table>
                    <hr />
                    <?php	
                            echo $this->Paginator->prev('Donneurs précédents') . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->numbers() . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->next('Donneurs suivants');
                    ?>
                    <hr />
                    <?php 
					
						if($this->Session->read('Auth.User.role') == "Administrateur"){
                            echo '<h4>' . $this->Html->link("Générer les dons mensuels", 
                                                        array('controller' => 'donneurs','action'=> 'activationMensuelleDons'),
                                                        array('class' => 'btn btn-warning')) 
                            . '</h4>';
						}
					?>
            </div>
        </div>
    </div>