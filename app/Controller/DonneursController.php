<?php

// app/Controller/DonneursController.php
class DonneursController extends AppController {

    public function add($idUser) {
        if ($this->request->is('post')) {
            $this->Donneur->create();

            $this->request->data['Donneur']['user_id'] = $idUser;
                        $this->request->data['Donneur']['don_mensuel'] = 0;
            $this->request->data['Donneur']['montant_don_mensuel'] = 0;

                        pr($this->request->data['Donneur']);

            if ($this->Donneur->save($this->request->data)) {

                $this->Session->setFlash(__('Félicitation votre compte a bien été créé !'));
                $this->redirect(array('action' => 'view',$this->Donneur->id));
            } else {
                $this->Session->setFlash(__('Nous sommes désolé, une erreur est survenue. Merci de réessayer.'));
            }
        }
    }

    public $paginate = array(
            'limit' => 3,
            'order' => array(
        'Donneur.username' => 'asc'
            ),
            'paramType' => 'querystring'
    );
	
    public function index(){
		$donneurs = $this->paginate('Donneur');
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
              
                $this->Session->setFlash(__('Votre profil a été modifié'));
                //return $this->redirect(array('action' => 'index'));
                return $this->redirect(array('controller'=>'donneurs','action' => 'view',$id));
            }
            $this->Session->setFlash(__('Impossible de modifier le profil'));
        }
        if(!$this->request->data){
            $this->request->data = $donneur;
        }
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
            $this->Session->setFlash(__('Cette association a été ajouté à vos favoris'));
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
								 'association_id' => $asso['id']
					);
					// Creation du don
					$this->Don->create();
					$this->Don->save($don);
				}
			}
		}
		$this->Session->setFlash(__('Génération des dons mensuels confirmée.'));
		return $this->redirect(array('controller'=>'donneurs','action' => 'index'));
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