<!-- Fichier : /app/View/Posts/view.ctp -->

<div class="row-fluid background-row">
<div class="span4" id="user_view_3" >
<?php

	echo '<a href="../../img/profilPic/'.$user['User']['profilPic'].'" rel="lightbox">'.$this->Html->image('profilPic/'.$user['User']['profilPic'], array('alt' => 'SDA Games Social Club')).'</a>';
	echo '<br /><br />';
	if($user['User']['id'] === $this->Session->read('Auth.User.id')){
		echo '<a id="modifProfil" class="btn">Modifier mon profil</a><br /><br />';
	}
?>
</div>
<div class="span4" id="user_view">
<?php
	
	echo '<div class="info_bloc">';
	echo '<span>Pseudo : </span><label>'.$user['User']['username'].'</label><br /><br />';
	echo '<span>Prénom - Nom : </span><label>'.$user['User']['prenom'].' '.$user['User']['nom'].'</label><br /><br />';
	echo '<span>Adresse email : </span><label>'.$user['User']['email'].'</label><br /><br />';
	echo '</div>';

?>
</div>

<div class="span4" id="user_view_2" >
<?php
	echo '<div class="info_bloc">';
	echo '<span>'.$this->Html->image('psn_logo.png', array('alt' => 'SDA Games Social Club')).'</span><label>'.$user['User']['psnAdress'].'</label><br /><br />';
	echo '<span>'.$this->Html->image('gamertag_logo.png', array('alt' => 'SDA Games Social Club')).'</span><label>'.$user['User']['gamertag'].'</label><br /><br />';
	echo '<span>'.$this->Html->image('fb_logo.gif', array('alt' => 'SDA Games Social Club')).'</span><label>'.$user['User']['fbAdress'].'</label><br /><br />';
	echo '</div>';

?>
</div>
</div>
<?php

	echo '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
	
	echo '<div class="modal-header">';
	echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
	echo '<h3 id="myModalLabel">Modifier mon profil</h3>';
	echo '</div>';
	
	echo '<div class="modal-body">';
	
	echo $this->Form->create('User',array('type' => 'file', 'id' => 'modif_profil_form', 'action' => 'edit/'.$user['User']['id'])); 
	
	echo '<div class="row-fluid">';
	echo '<div class="span12">';
	echo '<a id="modif_pic" onclick="getFile()" class="span12 btn">Charger une photo de profil</a>';
	echo '<div style="height: 0px;width:0px; overflow:hidden;">'.$this->Form->input('profilPic',array('type' => 'file', 'id' => 'upfile')).'</div><br /><br />';
	echo '</div>';
	echo '</div>';
	
	echo '<div class="row-fluid">';
	echo '<div class="span6">';
	echo $this->Form->input('username',array('type' => 'text', 'id' => 'modif_pseudo', 'value' => $user['User']['username'], 'placeholder' => 'Login', 'class' => 'span12', 'label' => false));
	echo '</div>';
	echo '<div class="span6">';
	echo $this->Form->input('email',array('type' => 'text', 'id' => 'modif_email', 'value' => $user['User']['email'], 'placeholder' => 'Email', 'class' => 'span12', 'label' => false));
	echo '</div>';
	echo '</div>';
	
	
	echo '<div class="row-fluid">';
	echo '<div class="span6">';
	echo $this->Form->input('nom',array('type' => 'text', 'id' => 'modif_nom', 'value' => $user['User']['nom'], 'class' => 'span12', 'placeholder' => 'Nom', 'label' => false));
	echo '</div>';
	echo '<div class="span6">';
	echo $this->Form->input('prenom',array('type' => 'text', 'id' => 'modif_prenom', 'value' => $user['User']['prenom'], 'class' => 'span12', 'placeholder' => 'Prénom', 'label' => false));
	echo '</div>';
	echo '</div>';
	
	echo '<div class="row-fluid">';
	echo '<div class="span6">';
	echo $this->Form->input('oldpass',array('type' => 'password', 'id' => 'modif_oldpass', 'class' => 'span12', 'placeholder' => 'Ancien mot de passe', 'label' => false));
	echo '</div>';
	echo '<div class="span6">';
	echo $this->Form->input('psnAdress',array('type' => 'text', 'value' => $user['User']['psnAdress'], 'class' => 'span12', 'placeholder' => 'Adresse Playstation Network', 'label' => false));
	echo '</div>';
	echo '</div>';
	
	echo '<div class="row-fluid">';
	echo '<div class="span6">';
	echo $this->Form->input('newpass',array('type' => 'password', 'id' => 'modif_newpass', 'class' => 'span12', 'placeholder' => 'Nouveau mot de passe', 'label' => false));
	echo '</div>';
	echo '<div class="span6">';
	echo $this->Form->input('gamertag',array('type' => 'text', 'id' => 'modif_newpass',  'value' => $user['User']['gamertag'] , 'class' => 'span12', 'placeholder' => 'Gamertag Xbox Live', 'label' => false));
	echo '</div>';
	echo '</div>';
	
	echo '<div class="row-fluid">';
	echo '<div class="span6">';
	echo $this->Form->input('confnewpass',array('type' => 'password', 'id' => 'modif_confnewpass', 'class' => 'span12', 'placeholder' => 'Confirmation du nouveau mot de passe', 'label' => false));
	echo '</div>';
	echo '<div class="span6">';
	echo $this->Form->input('facebookAdress',array('type' => 'password', 'id' => 'modif_confnewpass', 'class' => 'span12', 'placeholder' => 'Adresse facebook', 'label' => false));
	echo '</div>';
	echo '</div>';
	
	echo $this->Form->end();
	
	echo '</div>';
	
	echo '<div class="modal-footer">';
	echo '<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>';
	echo '<button id="valid_modif" class="btn btn-success">Valider les modifications</button>';
	echo '<button class="btn btn-danger">Supprimer mon profil</button>';
	echo '</div>';
	
	echo '</div>';

?>
<script>

function is_email(id){

return (/\S+@\S+\.\S+/).test(id);

}

$('#modifProfil').bind('click', function() {

	$('#myModal').modal('show');

});

$('#valid_modif').bind('click', function() {

	var valide = true;

	if($('#modif_pseudo').val() === ''){
		$('#modif_pseudo').css({'border-color':'red'});
		valide = false;
	}
	else{
		$('#modif_pseudo').css({'border-color':'#ccc'});
	}
	
	if($('#modif_email').val() === '' || !is_email($('#modif_email').val()) ){
		$('#modif_email').css({'border-color':'red'});
	}
	else{
		$('#modif_email').css({'border-color':'#ccc'});
	}
	if($('#modif_nom').val() === ''){
		$('#modif_nom').css({'border-color':'red'});
		valide = false;
	}
	else{
		$('#modif_nom').css({'border-color':'#ccc'});
	}
	
	if($('#modif_prenom').val() === ''){
		$('#modif_prenom').css({'border-color':'red'});
		valide = false;
	}
	else{
		$('#modif_prenom').css({'border-color':'#ccc'});
	}
	
	var password = '<?php echo $user['User']['password']; ?>';
	
	if( ($('#modif_newpass').val() !== '') ){
			
		//On regarde si le nouveau mot de passe et la confirmation différent 
		if( ($('#modif_newpass').val() !== $('#modif_confnewpass').val()) ){
			
			$('#modif_newpass').css({'border-color':'red'});
			$('#modif_confnewpass').css({'border-color':'red'});
			valide = false;
				
		}
		else if($('#modif_oldpass').val() === ''){
		
			$('#modif_oldpass').css({'border-color':'red'});
			valide = false;
		
		}
		else if($('#modif_oldpass').val() !== password){
			$('#modif_newpass').css({'border-color':'#ccc'});
			$('#modif_confnewpass').css({'border-color':'#ccc'});
			$('#modif_oldpass').css({'border-color':'red'});
			valide = false;
			
		}
		else{
			$('#modif_oldpass').css({'border-color':'#ccc'});
			$('#modif_newpass').css({'border-color':'#ccc'});
			$('#modif_confnewpass').css({'border-color':'#ccc'});
		}
			
	}
	
	if(valide === true){

		$('#modif_profil_form').submit();
	
	}
	
});

 function getFile(){
        document.getElementById("upfile").click();	
		
 }
 
 $('#upfile').change( function() {
 
	var fileName = $('#upfile').val(); 
	fileName = fileName.replace("C:\\fakepath\\","");
	
	
	$('#modif_pic').html(fileName);
	$('#modif_pic').addClass('btn-info');
 
 });

</script>

<?php $i=0; foreach($inscriptions as $inscription) { ?>

<?php echo $inscription['Competition']['Evenement']['titre']; ?> - <?php echo $inscription['Competition']['Game']['nom'].' '.$inscription['Competition']['Type']['nom'].' '.$inscription['Competition']['Support']['nom']; ?> | Place : <?php echo $inscription['Inscription']['ranking']; ?><br />

<?php if($i>=3){ break; } $i++; } ?> 
