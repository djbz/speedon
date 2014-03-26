<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AssociationsController
 *
 * @author Django
 */
class AssociationsController extends AppController {

	public function index(){
		// debug($this->Association->Favori->find('all'));
		// die();
	}
	
	public function view($id = null){
		$asso = $this->Association->findById($id);
		$this->set('asso', $asso);
		
	}
	
}

?>
