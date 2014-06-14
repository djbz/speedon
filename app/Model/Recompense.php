<?php

App::uses('Security', 'Utility'); 

class Recompense extends AppModel{
    
    //relation entre les Models
    public $belongsTo = array(
        'Administrateur' => array(
            'className'     => 'Administrateur',
            'foreignKey' => 'administrateur_id'
        )
    );
	
	public $hasAndBelongsToMany = array(
        'Donneur' =>
            array(
                'className' => 'donneur',
                'joinTable' => 'donneurs_recompenses',
                'foreignKey' => 'recompense_id',
                'associationForeignKey' => 'donneur_id',
				'with' => 'donneurs_recompenses',
                'unique' => false, // keepExisting ?
            )
    );
}

?>
