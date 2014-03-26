<div class="row-fluid background-row" id="header">
		<?php 
		
			echo $this->Session->flash('auth'); 
			$this->redirect($this->Auth->redirect());
		
		?>
</div>