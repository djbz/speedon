<br />
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
  				<div class="panel-heading text-center">Panneau d'administration Speedon</div>
  				<div style="color : black; text-align:justify"  class="panel-body">
    				<div class="container col-md-12">
						<div class="row">
                        	<div class="col-md-12 text-center">
                            	<?php echo $this->HTML->Link('Gérer les news',array('controller'=>'News','action'=>'manage'),array('class' => 'btn btn-default'));  ?>
                           		<?php echo $this->HTML->Link('Gérer les récompenses',array('controller'=>'Recompenses','action'=>'manage'),array('class' => 'btn btn-default'));  ?>
								<?php echo $this->HTML->Link('Gérer les associations',array('controller'=>'Vendeurs','action'=>'index'),array('class' => 'btn btn-default'));  ?>
							</div>
                        </div>
                   </div>
			</div>
		</div>
       </div>

</div>		
