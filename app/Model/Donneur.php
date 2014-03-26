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
                'unique' => true, // keepExisting ?
            ),
		'Association' =>
            array(
                'className' => 'Association',
                'joinTable' => 'associations_donneurs',
                'foreignKey' => 'donneur_id',
                'associationForeignKey' => 'association_id',
                'unique' => true, // keepExisting ?
            )
    );

    public $validate = array(
        'password' => array(
             'between' => array(
                'rule'    => array('between', 6, 55),
                'message' => 'Le mot de passe doit avoir une longueur comprise entre 6 et 55 caractères.',
                'allowEmpty' => false,
                'required' => true
            )
        ),
        're_password' => array(
            'rule' => array('equalToField', 'password'),
            'message' => 'Les deux mots de passe ne correspondent pas.',
            'required' => true
        ),
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
    
    function equalToField($array, $field) {
        return strcmp($this->data[$this->alias][key($array)], $this->data[$this->alias][$field]) == 0;
    }
    
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
	
    public function beforeSave($options = array()) {
        // encodage MD5
        if (!empty($this->data[$this->alias]['password']) &&
            !empty($this->data[$this->alias]['re_password'])
        ) {

            $this->data[$this->alias]['password'] = Security::hash($this->data['Donneur']['password'], 'md5', false);
            $this->data[$this->alias]['re_password'] = Security::hash($this->data['Donneur']['re_password'], 'md5', false);
        }
       
        return true;
    }
	
}

?>
