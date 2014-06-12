<br />
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
  				<div class="panel-heading text-center">Gestionnaire des récompenses</div>
  				<div style="color : black; text-align:justify"  class="panel-body">
    				<div class="container col-md-12">
						<div class="row">
                        	<div class="col-md-12 text-center">
                            	<?php echo $this->HTML->Link('Créer des récompenses',array('controller'=>'Recompenses','action'=>'add'),array('class' => 'btn btn-default'));  ?>
                           	</div>
                        </div>
                        <br />
                        <div class="row">
                        	<div class="col-md-12 text-center">
                            	<?php echo $this->HTML->Link('Gérer les associations',array('controller'=>'Associations','action'=>'manage'),array('class' => 'btn btn-default'));  ?>
                           		<?php echo $this->HTML->Link('Gérer les news',array('controller'=>'News','action'=>'manage'),array('class' => 'btn btn-default'));  ?>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                        	<div class="col-xs-12">
                           		
                                <table class="table table-striped table-hover">
                                	<tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Condition</th>
                                        <th>Créateur</th>
                                        <th class="text-center">Modifier</th>
                                    </tr>
                                    <tbody>
                                    <?php $i=1; foreach($recompenses as $recompense){ ?>
                                    	<tr>
                                        	<td><?php echo $i; ?></td>
                                            <td><?php echo $recompense['Recompense']['titre']; ?></td>
                                            <td><?php echo $recompense['Recompense']['condition_obtention'].' €'; ?></td>
                                            <td><?php echo $recompense['Administrateur']['prenom']. ' '.$recompense['Administrateur']['nom']; ?></td>
                                            <td class="text-center"><?php echo $this->HTML->Link('Gérer',array('controller' => 'Recompenses', 'action' => 'edit',$recompense['Recompense']['id']),array());  ?></td>
                                         </tr>   
                                            
                                    
                                    <?php $i++; } ?>
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
