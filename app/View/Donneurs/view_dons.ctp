<!-- File: /app/View/Donneurs/index.ctp -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="panel panel-default">
                <div class="panel-heading "><h1>Donneurs speedon</h1></div>
                    <table class="table table-hover">
                        <tr>
                            <th class="text-center"><h4><?php echo $this->Paginator->sort('Don.date','Date'); ?></h4></th>
                            <th class="text-center"><h4><?php echo 'Association'; ?></h4></th>
                            <th class="text-center"><h4><?php echo $this->Paginator->sort('Don.montant','Montant'); ?></h4></th>
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
                    <?php	
                            echo $this->Paginator->prev('Dons précédents') . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->numbers() . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->next('Dons suivants');      
                    ?>
            </div>
        </div>
    </div>
</div>