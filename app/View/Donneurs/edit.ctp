<!-- Fichier: /app/View/Donneurs/edit.ctp -->

<h1>Modifier le donneur</h1>
<?php

// RAJOUTER CONTRAINTES
echo $this->Form->create('Donneur');
echo $this->Form->input('password', array('type'=>'password', 'label'=>'Saisissez le nouveau mot de passe', 'autocomplete'=>'off'));
echo $this->Form->input('re_password', array('type'=>'password', 'label'=>'Resaisissez le nouveau mot de passe', 'autocomplete'=>'off'));
echo $this->Form->input('nom');
echo $this->Form->input('prenom');
echo $this->Form->input('mail');
echo $this->Form->input('adresse_postale');
echo $this->Form->input('numero_tel');

// COMMENT FAIRE ???
echo $this->Form->input('photo');

// AUTRE SYSTEME ?
echo $this->Form->input('coord_bancaire');

// AUTRE SYSTEME
echo $this->Form->input('don_mensuel');

// AUTRE PAGE ??
echo $this->Form->input('montant_don_mensuel');

// obligatoire
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Donneur');
?>