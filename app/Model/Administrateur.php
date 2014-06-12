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
class Administrateur extends AppModel{
    
    //relation entre les Models
    public $belongsTo = array(
        'User' => array(
            'className'     => 'User',
            'foreignKey' => 'user_id'
        )
    );
}

?>
