<?php

// app/Controller/UsersController.php
class UsersController extends AppController {

	// public function login() {
// 		if ($this->request->is('post')) {
// 			if ($this->Auth->login()) {
// 				$this->redirect($this->referer());
// 			} else {
// 				$this->Session->setFlash(__('<div style="margin:0; border-radius:0px;" class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>Login ou mot de passe invalide, réessayer</div>'));
// 				$this->redirect($this->referer());
// 			}
// 		}
// 	}
// 
// 	public function logout() {
// 		$this->Auth->logout();
// 		$this->redirect($this->referer());
// 	}
// 
//     public function index() {
//         $this->User->recursive = 0;
//         $this->set('users', $this->paginate());
//     }
//     
// 
//     public function view($id = null) {
//         $this->User->id = $id;
//         if (!$this->User->exists()) {
//             throw new NotFoundException(__('User invalide'));
//         }
//         $this->set('user', $this->User->read(null, $id));
//         
//         $this->loadModel('Player');
//         $this->loadModel('Inscription');
//        
//        	$players = $this->Player->findAllByUserId($id);
//        	
//        	foreach($players as $player){
//        	
//        		$les_inscriptions = $this->Inscription->findAllByPlayerId($player['Player']['id']);
//        		
//        		foreach($les_inscriptions as $inscription){
//        		
//        			$inscriptions[] = $inscription;
//        		
//        		}
//        	
//        	}
//        	
//         $this->set('inscriptions', $inscriptions);
//         
//         
//     }
// 
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('L\'user a été sauvegardé'));
            	$this->redirect(array('controller' => $this->request['data']['User']['role'].'s', 'action' => 'add',$this->User->id));
            } else {
                $this->Session->setFlash(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
            }
        }
    }
// 
//     public function edit($id = null) {
//         $this->User->id = $id;
//         if (!$this->User->exists()) {
//             throw new NotFoundException(__('User Invalide'));
//         }
//         if ($this->request->is('post') || $this->request->is('put')) {
//           
// 			if(!empty($this->request->data['User']['profilPic']['name'])){  
// 			  $newPath = rand(0,999)."_".$this->request->data['User']['profilPic']['name'];
// 			  move_uploaded_file($this->request->data['User']['profilPic']['tmp_name'],'img/profilPic/'.$newPath);
// 			  $this->request->data['User']['profilPic'] = $newPath;
// 			}
// 			else{
// 				$user = $this->User->findById($id);
// 				$this->request->data['User']['profilPic'] = $user['User']['profilPic'];
// 			}
// 		  if ($this->User->save($this->request->data)) {
// 		  
// 				$this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>La modification a bien été effectué</div>'));
// 				$this->Session->write('Auth', $this->User->read(null, $user_id));
//                 $this->redirect($this->referer());
//             } else {
//                 $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>La modification n\'a pas été effectué en raison d\'une erreur.</div>'));
//             }
//         } else {
//             $this->request->data = $this->User->read(null, $id);
//             unset($this->request->data['User']['password']);
//         }
//     }
// 
//     public function delete($id = null) {
//         if (!$this->request->is('post')) {
//             throw new MethodNotAllowedException();
//         }
//         $this->User->id = $id;
//         if (!$this->User->exists()) {
//             throw new NotFoundException(__('User invalide'));
//         }
//         if ($this->User->delete()) {
//             $this->Session->setFlash(__('User supprimé'));
//             $this->redirect(array('action' => 'index'));
//         }
//         $this->Session->setFlash(__('L\'user n\'a pas été supprimé'));
//         $this->redirect(array('action' => 'index'));
//     }
}
?>