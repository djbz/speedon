Nom : 
<?php
	echo $asso['Association']['nom_asso'];
?>
<br/>

<?php
	//echo $this->Html->link("AJOUTER CETTE ASSOCIATION A MES FAVORIS :D", array('controller' => 'favoris','action'=> 'saveFavori', $asso['Association']['id']));
	echo $this->Html->link("AJOUTER CETTE ASSOCIATION A MES FAVORIS :D", array('controller' => 'donneurs','action'=> 'saveFavori', $asso['Association']['id']));
	
	echo '<br/>';
	
	echo $this->Html->link("FAIRE UN DON <3", array('controller' => 'dons','action'=> 'donUnique', $asso['Association']['id']));
?>
