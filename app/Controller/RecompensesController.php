<?php

class RecompensesController extends AppController {


    public function manage(){
        $this->set('recompenses', $this->Recompense->find('all'));
    }



	public function delete($id = null){
		if (!$id) {
            throw new NotFoundException(__('Récompense invalide'));
        }
		if ($this->Recompense->delete($id, true)) {
			$this->Session->setFlash('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>La récompense a bien été supprimée.</div>');
			$this->redirect(array("action" => "manage"));
		}
		else{
			 $this->Session->setFlash('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Impossible de supprimer la récompense.</div>');
		}
	}

	public function add() {
        
		if ($this->request->is('post')) {
            $this->Recompense->create();
			$this->request->data['Recompense']['administrateur_id'] = $this->Session->read('Auth.User.Administrateur.id'); 
            
			if ($this->Recompense->save($this->request->data)) {
            	
                $this->Session->setFlash('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Le récompense a bien été créée.</div>');
            	$this->redirect($this->referer());
            } else {
				$this->Session->setFlash('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Impossible de supprimer la commande.</div>');

            }
        }
    }



   public function edit($id = null) {
		
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$recompense = $this->Recompense->findById($id);
		if (!$recompense) {
			throw new NotFoundException(__('Récompense invalide'));
		}
		$this->set('recompense', $recompense);
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Recompense->id = $id;
			if ($this->Recompense->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>La récompense a bien été mise à jour.</div>');
				$this->redirect($this->referer());
			} else {
				$this->Session->setFlash('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Impossible de mettre la récompense à jour.</div>');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $recompense;
		}
	}

}

?>
