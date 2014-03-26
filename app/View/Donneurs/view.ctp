<!-- Fichier : /app/View/Donneurs/view.ctp -->

<h1><?php echo h($donneur['User']['username']); ?></h1>
<?php if($donneur['Donneur']['photo'] != "") echo $this->Html->image($donneur['Donneur']['photo'], array('alt' => 'photo_profil')); ?>


<h3>TOTAL DES DONS : <b><?php echo $totalDon; ?>€</b></h3>

<h3>RECOMPENSES</h3>

<?php
	foreach($donneur['Recompense'] as $recompense){
		echo '<div style="display:block;float:left;width:150px;margin-left:10px;text-align:center;">' . '<span>' .
			$this->Html->link($recompense['titre'],array('controller' => 'recompenses', 'action' => 'view', $recompense['id'])) . '</span><br/>' .
			$this->Html->image($recompense['photo'], array('alt' => $recompense['titre'], 'title' => $recompense['condition_obtention'])) .
			'</div>';// TODO : ADAPTER POUR LINKER VERS LA DESCRIPTION D'UNE RECOMPENSE
	}
?>
<!-- pour annuler le float -->
<div style="clear:both;"></div>

<h3>ASSOCIATIONS FAVORITES</h3>
<?php
	foreach($donneur['Association'] as $asso){
		echo '<span style="margin-right:20px;">' . $this->Html->link($asso['nom_asso'],
            array('controller' => 'associations', 'action' => 'view', $asso['id'])) . '</span>'; // TODO : ADAPTER POUR LINKER VERS LA DESCRIPTION LONGUE D'UNE ASSSO
	}
?>

<br/><br/>

<!-- si le donneur consulte SON PROFIL -->
<b>SI L'UTILISATEUR EST SUR SON PROFIL (SINON CACHE)</b>
<p>Nom : <?php echo h($donneur['Donneur']['nom']); ?></p>
<p>Prenom : <?php echo h($donneur['Donneur']['prenom']); ?></p>
<p>Mail : <?php echo h($donneur['Donneur']['mail']); ?></p>
<p>Adresse postale : <?php echo h($donneur['Donneur']['adresse_postale']); ?></p>
<p>Numéro de téléphone : <?php echo h($donneur['Donneur']['numero_tel']); ?></p>
<p>Don mensuel : <?php echo h($donneur['Donneur']['don_mensuel']) ? "activé" : "désactivé"; ?></p>
<p>Coordonnées bancaires : <?php echo h($donneur['Donneur']['coord_bancaire']); ?></p>
<p>Montant du don mensuel : <?php echo h($donneur['Donneur']['montant_don_mensuel']); ?>€</p>
<h3><?php echo $this->Html->link(
            'Modifier',
            array('action' => 'edit', $donneur['Donneur']['id'])
         );
    ?>
</h3>
<!-- end IF -->
