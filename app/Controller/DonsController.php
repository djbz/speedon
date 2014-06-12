<?php

class DonsController extends AppController {

	public function index(){
	
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
                            $this->request->data['Don']['date'] = date("Y-m-d H:i:s");
                if($this->Don->save($this->request->data)){
                   	$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Félicitation!</strong> Votre don a bien été effectué !</div>'));
                    
					$this->loadModel('Recompense');
					$recompenses = $this->Recompense->find('all'); 
				
					foreach($recompenses as $recompense){
						if($this->request->data['Don']['montant'] > $recompense['Recompense']['condition_obtention']){
							$alreadyHave = false;
							foreach($donneur['Recompense'] as $existingRecompense){
								if($existingRecompense['id'] == $recompense['Recompense']['id']){
									$alreadyHave = true;
								}
							}
							if(!$alreadyHave){
								$this->Donneur->Recompense->save(array(
									'Donneur' => array('id' => $donneur['Donneur']['id']), // L'ID du donneur qui a cliqué sur l'asso à ajouter à ses favoris
									'Recompense' => array ('id' => $recompense['Recompense']['id']),
									array('validate' => 'first')
								));
							}
						
					
            									
						}
				}
			
					
					return $this->redirect(array('controller'=>'associations','action' => 'view', $id));
                }
				$this->Session->setFlash(__('<div class="col-md-10 col-md-offset-1 alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Attention!</strong> impossible d\'envoyer le don !</div>'));
            
			}
		
            $this->loadModel('Association');
            $asso = $this->Association->findById($id);
            $this->set('asso', $asso);
	}
	
}

?>
