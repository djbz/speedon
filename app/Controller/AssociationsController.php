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

    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'User.username' => 'asc'
        ),
        'paramType' => 'querystring'
    );

	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index(){
        if($this->request->is('post') && !empty($this->request->data['nomAsso'])){
            $nomAsso = $this->request->data['nomAsso'];
            //$assos = $this->Association->find('all', array( 'conditions' => array("Association.nom_asso LIKE" => "%$nomAsso%" )));
            $this->paginate = array('conditions' => array("Association.nom_asso LIKE" => "%$nomAsso%"));
            $assos = $this->paginate();
        }else{
            //$assos = $this->Association->find('all');
            $assos = $this->paginate('Association');
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
        $totalDon = $this->totalDon($asso);
        $this->set('totalDon', $totalDon);

        $this->loadModel('Don');
        $lastDon = $this->Don->find('first', array('conditions' => array('Don.association_id' => $id), 'order' => array('Don.date' => 'desc')));
        $this->set('lastDon', $lastDon);



		
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


    //TODO securité
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

    //TODO securité
    public function view_dons($id = null) {

        if(!$id){
            throw new NotFoundException(__('Association invalide'));
        }

        $asso = $this->Association->findById($id);

        if(!$asso){
            throw new NotFoundException(__('Donneur invalide'));
        }

        $this->loadModel('Don');

        $this->paginate = array(
            'conditions' => array('Don.association_id =' => $id),
            'limit' => 5,
            'order' => array(
                'Don.date' => 'desc'
            )
        );

        $dons = $this->paginate('Don');

        $this->set('dons', $dons);
        $this->set('asso_id', $id);
        //$dons = $this->Don->find('all', array('conditions' => array('Don.association_id' => $id), 'order' => array('Don.date' => 'desc')));

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
