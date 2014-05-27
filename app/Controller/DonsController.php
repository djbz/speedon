<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DonsController
 *
 * @author Django
 */
class DonsController extends AppController {

	public function index(){
		// debug($this->Association->Favori->find('all'));
		// die();
	}
        
	public function donUnique($id = null){
            if(!$id){
                throw new NotFoundException(__('Association invalide'));
            }
            $this->loadModel('Donneur');
            $donneur = $this->Donneur->findByUser_id($this->Session->read('Auth.User.id'));
            if(!$donneur['Donneur']['id']){
                throw new NotFoundException(__('Donneur invalide'));
            }
            if($this->request->is(array('post', 'put'))){
                            $this->request->data['Don']['donneur_id'] = $donneur['Donneur']['id']; //ID de l'utilisateur courant
                            $this->request->data['Don']['association_id'] = $id;
                if($this->Don->save($this->request->data)){
                    $this->Session->setFlash(__('Don validé ! Merci !'));
                    return $this->redirect(array('controller'=>'associations','action' => 'view', $id));
                }
                $this->Session->setFlash(__('Impossible d\'effectuer le don'));
            }
		
            $this->loadModel('Association');
            $asso = $this->Association->findById($id);
            $this->set('asso', $asso);
	}
	
}

?>
