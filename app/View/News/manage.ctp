<br />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Gestionnaire des news</div>
                <div style="color : black; text-align:justify"  class="panel-body">
                    <div class="container col-md-12">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php echo $this->Html->link('Ajouter un Post',array('controller' => 'news', 'action' => 'add'), array('class' => 'btn btn-success')); ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Titre</th>
                                        <th>Date création</th>
                                        <th>Édition</th>
                                        <th>Suppression</th>

                                    </tr>
                                    <tbody>
                                        <?php foreach ($news as $new): ?> 
                                        <tr>
                                            <td><?php echo $this->Html->link($new['News']['titre'], array('controller' => 'news', 'action' => 'view', $new['News']['id']), array('class' => 'col-md-12')); ?></td>

                                            <td><?php echo $new['News']['date']; ?></td>

                                            <td><?php echo $this->Html->link('Editer', array('action' => 'edit', $new['News']['id']), array('class' => 'btn btn-success')); ?></td>

                                            <td><?php echo $this->Form->postLink('Supprimer',array('action' => 'delete', $new['News']['id']),array('confirm' => 'Etes-vous sûr ?','class' => 'btn btn-success')); ?></td>



                                            <?php endforeach; ?> <?php unset($new); ?>      
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>		
