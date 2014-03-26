<?php

App::uses('CakeEmail', 'Network/Email');
App::uses('AppController', 'Controller');

class ContactController extends AppController {
	 public function index() {

		}

	public function send() {
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$societe = $_POST["societe"];
		$email = $_POST["email"];
		$demande = $_POST["demande"];
		$to = "pierre.gaillard89140@gmail.com";


$this->Email->to = $to ['Pierre Gaillard']['pierre.gaillard89140@gmail.com'];
   $this->Email->bcc = array('secret@exemple.com');
   $this->Email->subject = 'Bienvenue à ce truc très cool';
   $this->Email->replyTo = 'support@exemple.com';
   $this->Email->from = 'Appli Web Extra Cool <app@exemple.com>';
   $this->Email->template = 'simple_message'; 
   $this->Email->sendAs = 'both'; 
   $this->Email->send();

$this->Email->smtpOptions = array(
    'port'=>'25',
    'timeout'=>'30',
    'host' => 'ssl://smtp.gmail.com',
    'username'=>'testprojetpooavancee@gmail.com',
    'password'=>'testprojet',
    'client' => 'nom_machine_smtp_helo'
);

$this->Email->delivery = 'smtp';

$this->Email->send();

$this->set('smtp-errors', $this->Email->smtpError);
	}
}
?>