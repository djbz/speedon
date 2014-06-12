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

	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index(){
        if($this->request->is('post') && !empty($this->request->data['nomAsso'])){
            $nomAsso = $this->request->data['nomAsso'];
            $assos = $this->Association->find('all', array( 'conditions' => array("Association.nom_asso LIKE" => "%$nomAsso%" )));
        }else{
            $assos = $this->Association->find('all');
        }

        $this->set('assos', $assos);
    }



	public function view($id = null){

        if(!$id){
            throw new NotFoundException(__('Association invalide'));
        }

		$asso = $this->Association->findById($id);

        if(!$asso){
            throw new NotFoundException(__('Donneur invalide'));
        }

		$this->set('asso', $asso);
		
	}



	public function add($idUser) {
        if ($this->request->is('post')) {
            $this->Association->create();
            
            $this->request->data['Association']['user_id'] = $idUser;
			
            if ($this->Association->save($this->request->data)) {
            	
				$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong> Votre compte a bien été créé !</div>'));
            	$this->redirect(array('controller' => 'users', 'action' => 'login'));
            } else {
				$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Attention!</strong> Une erreur est survenue lors de votre inscription !</div>'));
            }
        }
    }



    public function edit($id = null){

        if(!$id){
            throw new NotFoundException(__('Association invalide'));
        }

        $association = $this->Association->findById($id);
        if (!$association) {
            throw new NotFoundException(__('Invalid post'));
        }
        if($this->request->is(array('post', 'put'))){
            $this->Association->id = $id;

            if($this->request->data[''])
            if($this->User->editUser($this->request->data['User'])){
                echo "Yes";
            }
            else
                echo "False";

            if($this->Association->save($this->request->data)){
				$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong>Votre compte a bien été modifée !</div>'));
                return $this->redirect(array('controller'=>'associations','action' => 'view',$id));
            }
				$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Attention!</strong>Une erreure est survenue lors de la modification de votre compte !</div>'));
        }

        if(!$this->request->data){
            $this->request->data = $association;
        }

    }


    public function totalDon($association){

        $totalDon = 0;
        foreach($association['Don'] as $don){
            $totalDon += $don['montant'];
        }
        return $totalDon;

    }




	
}

?>
