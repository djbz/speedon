<?php

App::uses('CakeEmail', 'Network/Email');
App::uses('AppController', 'Controller');

class ContactController extends AppController {
	 public function index() {

		}
		
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('send','index');
    }

	public function send() {
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$societe = $_POST["societe"];
		$email = $_POST["email"];
		$demande = $_POST["demande"];

   $Email = new CakeEmail('gmail');
   $Email->template('contact','default'); 
   $Email->EmailFormat('html');
   $Email->to('pierre.gaillard89140@gmail.com');
   $Email->subject('Requête Speedon');
   $Email->from(array($email => 'Speedon'));
   $Email->viewVars(compact('nom')); 
   $Email->viewVars(compact('prenom')); 
   $Email->viewVars(compact('societe')); 
   $Email->viewVars(compact('email')); 
   $Email->viewVars(compact('demande'));  
   $Email->send();
	}
}
?>