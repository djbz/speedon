<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Security', 'Utility'); 

/**
 * Description of Donneur
 *
 * @author Django
 */
class Donneur extends AppModel{
    
    // relation entre les Models
    public $hasMany = array('Don');
    
	public $belongsTo = array(
        'User' => array(
            'className'     => 'User',
			'foreignKey' => 'user_id'
        )
    );
	
	public $hasAndBelongsToMany = array(
        'Recompense' =>
            array(
                'className' => 'Recompense',
                'joinTable' => 'donneurs_recompenses',
                'foreignKey' => 'donneur_id',
                'associationForeignKey' => 'recompense_id',
                'unique' => 'keepExisting', // keepExisting ?
            ),
		'Association' =>
            array(
                'className' => 'Association',
                'joinTable' => 'associations_donneurs',
                'foreignKey' => 'donneur_id',
                'associationForeignKey' => 'association_id',
                'unique' => 'keepExisting', // keepExisting ?
            )
    );

    public $validate = array(
        'nom' => array(
            'alphaNumeric' => array(
                'rule'    => array('alphaNumeric'),
                'message' => 'Les données pour ce champ ne doivent contenir que lettres et chiffres.',
                'allowEmpty' => false,
                'required' => true
                ),
            'maxLength' => array(
                'rule'    => array('maxLength', 55),
                'message' => 'Votre nom ne doit pas dépasser 55 caractères.'
            )
        ),
        'prenom' => array(
            'alphaNumeric' => array(
                'rule'    => array('alphaNumeric'),
                'message' => 'Les données pour ce champ ne doivent contenir que lettres et chiffres.',
                'allowEmpty' => false,
                'required' => true
            ),
            'maxLength' => array(
                'rule'    => array('maxLength', 55),
                'message' => 'Votre prenom ne doit pas dépasser 55 caractères.'
            )
        ),
        'mail' => array(
            'email' => array(
                'rule'    => array('email', true),
                'message' => 'Merci de soumettre une adresse email valide.',
                'allowEmpty' => false,
                'required' => true
            ),
            'maxLength' => array(
                'rule'    => array('maxLength', 55),
                'message' => 'Votre mail ne doit pas dépasser 55 caractères.'
            )
        ),
        'adresse_postale' => array(
                'rule'    => array('maxLength', 255),
                'message' => 'Votre prenom ne doit pas dépasser 255 caractères.'
        ),
        'coord_bancaire' => array(
            'alphaNumeric' => array(
                'rule'    => array('alphaNumeric'),
                'message' => 'Les données pour ce champ ne doivent contenir que lettres et chiffres.',
                'allowEmpty' => true
            ),
            'maxLength' => array(
                'rule'    => array('maxLength', 255),
                'message' => 'Les données pour ce champ ne doivent pas dépasser 255 caractères.'
            )
        ),
        'numero_tel' => array(
            'rule'    => 'numeric',
            'message' => 'Merci de soumettre un numéro de téléphone valide.',
            'allowEmpty' => true
        )
    );
    
	public function beforeValidate($options = array()){
		$validator = $this->validator();
		
		if($this->data[$this->alias]['don_mensuel'] == true){
			$validator['montant_don_mensuel'] = array(
				'numeric' => array(
					'rule' => 'numeric',
					'message' => 'Merci de soumettre un nombre valide.'
					),
				'range' => array(
					'rule'    => array('range', 0.09999999, 10000.0001),
					'message' => 'Le montant du don mensuel doit être compris entre 0.1€ et 10 000€.'
				),
				'maxLength' => array(
					'rule'    => array('maxLength', 8),
					'message' => 'Trop de chiffres saisis.'
				)
			);
			$this->data[$this->alias]['montant_don_mensuel'] = round($this->data[$this->alias]['montant_don_mensuel'], 2);
		}else{
			$validator['montant_don_mensuel'] = array(
				'numeric' => array(
					'rule' => 'numeric',
					'message' => 'Merci de soumettre un nombre valide.',
					'allowEmpty' => true
					),
				'maxLength' => array(
					'rule'    => array('maxLength', 8),
					'message' => 'Trop de chiffres saisis.'
				)
			);
			$this->data[$this->alias]['montant_don_mensuel'] = 0;
		}
	}
	
	
}

?>
