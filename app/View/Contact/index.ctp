<!-- Note à moi même : changer la couleur de la navbar top (vert), mettre le logo à côté du nom navbar, peut être compléter encore ? -->
<!-- Tout les éléments sont testé responsive et fonctionnels ! -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Speedon</title>
</head>

<body>

	  <body>

		
<div class="container">
<div class ="well span8">

<h1>Formulaire de contact Speedon</h1>
<br>
<form class="form-horizontal" role="form" method="post" action="contact/send">
  <div class="form-group">
    <label for="inputText" class="col-sm-5 control-label">Votre nom : </label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputTextNom" placeholder="Exemple : Bertrand" name="nom">
    </div>
  </div>
  <div class="form-group">
    <label for="inputText2" class="col-sm-5 control-label">Votre prénom : </label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputTextPre" placeholder="Exemple : Alexandre" name="prenom">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail" class="col-sm-5 control-label">Votre email : </label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail" placeholder="Exemple : team@speedon.fr" name="email">
    </div>
  </div>
    <div class="form-group">
    <label for="inputText3" class="col-sm-5 control-label">Votre Société : </label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputTextSoc" placeholder="Exemple : Speedon" name="societe">
    </div>
  </div>
      <div class="form-group">
    <label for="inputText4" class="col-sm-5 control-label">Votre demande : </label>
    <div class="col-sm-3">
	<textarea class="form-control" rows="3" placeholder="Exemple : Votre association gère les dons automatiques ?" id="inputTextDem" name="demande"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary pull-right" id="ContactSpe">Envoyez votre demande</button>
    </div>
  </div>
</form>
</div>
</div>

	
  




  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>