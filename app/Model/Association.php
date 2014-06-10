<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Security', 'Utility'); 

/**
 * Description of Association
 *
 * @author Django
 */
class Association extends AppModel{
    
    //relation entre les Models
    public $hasMany = array('Don');
    
	public $hasAndBelongsToMany = array(
        'Donneur' =>
            array(
                'className' => 'Donneur',
                'joinTable' => 'associations_donneurs',
                'foreignKey' => 'association_id',
                'associationForeignKey' => 'donneur_id',
                'unique' => false, // attention sinon, 1 seul donneur pour une seule asso
            )
    );

    public $belongsTo = array(
        'User' => array(
            'className'     => 'User',
            'foreignKey' => 'user_id'
        )
    );
}

?>
