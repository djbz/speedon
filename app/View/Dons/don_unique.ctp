<h1>Faire un don pour <?php echo $asso['Association']['nom_asso']; ?></h1>
<?php

// RAJOUTER CONTRAINTES
echo $this->Form->create('Don');
echo $this->Form->input('montant', array(
		'label' => 'Montant (€)')
	);
echo $this->Form->end('Donner :)');
?>