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
	
	public function add($idUser) {
        if ($this->request->is('post')) {
            $this->Association->create();
            
            $this->request->data['Association']['user_id'] = $idUser;
			
            if ($this->Association->save($this->request->data)) {
            	
                $this->Session->setFlash(__('Félicitation votre compte a bien été créé !'));
            	$this->redirect(array('action' => 'view',$this->Association->id));
            } else {
                $this->Session->setFlash(__('Nous sommes désolé, une erreur est survenue. Merci de réessayer.'));
            }
        }
    }
	
}

?>
