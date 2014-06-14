<?php

// app/Controller/DonneursController.php
class DonneursController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function add($idUser) {
        if ($this->request->is('post')) {
            $this->Donneur->create();

            $this->request->data['Donneur']['user_id'] = $idUser;
                        $this->request->data['Donneur']['don_mensuel'] = 0;
            $this->request->data['Donneur']['montant_don_mensuel'] = 0;

                        //pr($this->request->data['Donneur']);

            if ($this->Donneur->save($this->request->data)) {

				$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong> Votre compte a bien été créé. Vous pouvez désormais vous connecter.</div>'));
                $this->redirect(array('controller' => 'users', 'action' => 'login'));
            } else {
               	$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Attention!</strong> Une erreur est survenue merci de réessayer.</div>'));
            }
        }
    }

    public $paginate = array(
            'limit' => 5,
            'order' => array(
                'User.username' => 'asc'
            ),
            'paramType' => 'querystring'
    );
	
    public function index(){
       
        if($this->request->is('post') && !empty($this->request->data['username'])){
            $this->loadModel('User');
            $username = $this->request->data['username'];
            $this->paginate = array('conditions' => array("User.username LIKE" => "%$username%"));
            $donneurs = $this->paginate();
        }else{
            $donneurs = $this->paginate('Donneur');
     
        }
  
        foreach($donneurs as  $key => $donneur)
                $donneurs[$key]['Donneur']['total_don'] = totalDon($donneur);
         $this->set('donneurs', $donneurs);

    }
    
    public function view($id = null){
        if(!$id){
            throw new NotFoundException(__('Donneur invalide'));
        }
        
        $donneur = $this->Donneur->findById($id);
        
        
        if(!$donneur){
            throw new NotFoundException(__('Donneur invalide'));
        }
     
        $totalDon = totalDon($donneur);
        $this->set('totalDon', $totalDon);
        $this->set('donneur', $donneur);
    }
    
    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Donneur invalide'));
        }
        $donneur = $this->Donneur->findById($id);
        if (!$donneur) {
            throw new NotFoundException(__('Invalid post'));
        }
		
		
		
        if($this->request->is(array('post', 'put'))){
            $this->Donneur->id = $id;
            if($this->Donneur->save($this->request->data)){
              
			  	$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong> Votre profil a été modifié.</div>'));
			  
			  	$this->loadModel('User');
				$user = $this->User->findById($donneur['User']['id']);
				
				if($this->request->data['Donneur']['password'] != "" && ($this->request->data['Donneur']['password'] == $this->request->data['Donneur']['re_password'])){
					
					$user['User']['password'] = $this->request->data['Donneur']['password'];
					$this->User->save($user);
					//pr($user);
				}
				else{
					//$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Attention!</strong> Votre mot de passe n\'a pas été modifié.</div>'));
				}
				
			  
                //return $this->redirect(array('action' => 'index'));
                return $this->redirect(array('controller'=>'donneurs','action' => 'view',$id));
            }
            	$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Attention!</strong> Une erreur est survenue merci de réessayer.</div>'));
        }
        if(!$this->request->data){
            $this->request->data = $donneur;
        }
		$this->set('donneur_id', $id);
    }
	
	public function saveFavori($id = null){  
            
            // on récupère l'ID de l'utilisateur en cours (id donneur)
            $donneur = $this->Donneur->findByUser_id($this->Session->read('Auth.User.id'));
            if(!$donneur['Donneur']['id']){
                throw new NotFoundException(__('Donneur invalide'));
            }
            $this->Donneur->Association->save(array(
                    'Donneur' => array('id' => $donneur['Donneur']['id']), // L'ID du donneur qui a cliqué sur l'asso à ajouter à ses favoris
                    'Association' => array ('id' => $id)
            ));
            $this->Donneur->Association->create();
            $this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong> L\'association a été ajoutée à vos favoris.</div>'));
            return $this->redirect(array('controller'=>'associations','action' => 'view', $id));
	}
	
	public function activationMensuelleDons(){
		$this->loadModel('Don'); // nous permet d'utiliser save sur le model Don
		$donneurs = $this->Donneur->find('all');
		foreach($donneurs as $donneur){
			if($donneur['Donneur']['don_mensuel'] == true){
				$montantMensuel = $donneur['Donneur']['montant_don_mensuel'];
                                
				$nbAssociationFavories = count($donneur['Association']); // nombre d'associations favorites
				
                                $montant_divise = floor(($montantMensuel / $nbAssociationFavories)*pow(10,2))/pow(10,2);
                             
				foreach($donneur['Association'] as $asso){
					$don = array('montant' => $montant_divise, 
                                                    'donneur_id' => $donneur['Donneur']['id'],
                                                    'association_id' => $asso['id'],
                                                    'date' => date("Y-m-d H:i:s")
					);
					// Creation du don
					$this->Don->create();
					$this->Don->save($don);
				}
			}
		}
		$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong> Le don mensuel a été activé.</div>'));
		return $this->redirect(array('controller'=>'donneurs','action' => 'index'));
	}
        
         public function view_dons($id = null){
             if(!$id){
                throw new NotFoundException(__('Donneur invalide'));
            }
            $donneur = $this->Donneur->findById($id);
            if (!$donneur) {
                throw new NotFoundException(__('Invalid post'));
            }
            $this->loadModel('Don');
            $this->paginate = array(
                'conditions' => array('Don.donneur_id =' => $id),
                'limit' => 5,
                'order' => array(
                        'Don.date' => 'desc'
                    )
                );
  
            $dons = $this->paginate('Don');
       
            $this->set('dons', $dons);
			$this->set('donneur_id', $id);
         }
                 
    } 

	function totalDon($donneur){
            $totalDon = 0;
            foreach($donneur['Don'] as $don){
                $totalDon += $don['montant'];
            }
            return $totalDon;
	}
	
?>