<?php

// app/Model/User.php
class User extends AppModel {
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un nom d\'user est requis'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un mot de passe est requis'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('Association', 'Donneur','Administrateur')),
                'message' => 'Merci de rentrer un rôle valide',
                'allowEmpty' => false
            )
        )
    );
    public $hasMany = array(
        'Donneur' => array(
            'className'     => 'Donneur',
        )
    );
}

?>