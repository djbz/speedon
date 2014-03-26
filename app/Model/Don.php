<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Security', 'Utility'); 

/**
 * Description of Don
 *
 * @author Django
 */
class Don extends AppModel{
    
    // relation entre les Models
	public $belongsTo = array(
        'Donneur' => array(
            'className' => 'Donneur',
            'foreignKey' => 'donneur_id'
        ),
		'Association' => array(
            'className' => 'Association',
            'foreignKey' => 'association_id'
        )
    );

    public $validate = array(
		'montant' => array(
            'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Merci de soumettre un nombre valide.'
				),
			'range' => array(
				'rule'    => array('range', 0.09999999, 10000.0001),
				'message' => 'Le montant du don doit être compris entre 0.1€ et 10 000€.'
			),
			'maxLength' => array(
				'rule'    => array('maxLength', 8),
				'message' => 'Trop de chiffres saisis.'
			)
        )
    );
    
    public function beforeSave($options = array()) {
        
		// CREATION PDF...
        
        return true;
    }
}

?>
