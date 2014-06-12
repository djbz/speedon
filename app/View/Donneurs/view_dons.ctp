<!-- File: /app/View/Donneurs/index.ctp -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="panel panel-default">
                <div class="panel-heading "><h5>Donneurs speedon</h5></div>
                    <table class="table table-hover">
                        <tr>
                            <th class="text-center"><h5><?php echo $this->Paginator->sort('Don.date','Date'); ?></h5></th>
                            <th class="text-center"><h5><?php echo 'Association'; ?></h5></th>
                            <th class="text-center"><h5><?php echo $this->Paginator->sort('Don.montant','Montant'); ?></h5></th>
                        </tr>
                        <?php foreach($dons as $don): ?>
                            <tr>
                                <td>
                                    
                                    <?php echo strftime("%d/%m/%Y<br/>%H:%M", strtotime($don['Don']['date'])); ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link($don['Association']['nom_asso'],
                                            array('controller' => 'associations', 'action' => 'view', $don['Don']['association_id'])); ?>
                                </td>
                                <td>
                                    <?php echo $don['Don']['montant'];?>
                                </td>

                            </tr>
                        <?php 
                            endforeach;
                            unset($don);
                        ?>
                    </table>
                    <hr />
                    <?php	
                            echo $this->Paginator->prev('Dons précédents') . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->numbers() . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->next('Dons suivants'); 
							echo '<hr />';
							echo $this->Html->link('Retour', array('action' => 'view', $donneur_id), array('class' => 'btn btn-success'));
                    		echo '<hr />';
                    ?>
              
            </div>
  
    </div>
</div>