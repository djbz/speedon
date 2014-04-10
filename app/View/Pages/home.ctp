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
  <div id="clouds">
    <div class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Speedon</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#about">À propos</a></li>
            <li><a href="FAQ">FAQ</a></li>
            <li><a href="#inscription">Inscription</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Adresse mail" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Mot de passe" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Se connecter</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Vous souhaitez rejoindre Speedon ?</h2>
          <p> Rejoignez le plus grand réseau d'associations !</p>
          <p><a class="btn btn-default" href="#" role="button">Inscription &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Envie de plus d'informations ?</h2>
          <p>N'hésitez pas ! Contactez nous et posez nous toutes les questions que vous souhaitez !</p>
          <p><a class="btn btn-default" href="contact" role="button">Contactez nous &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Nouveau visiteur ? Lisez notre FAQ !</h2>
          <p>Vous y trouverez plein d'informations vitales ! </p>
          <p><a class="btn btn-default" href="#" role="button">Lire notre FAQ &raquo;</a></p>
        </div>
      </div>

      <hr>
      <footer>
        <p>&copy; Speedon 2013-2014</p>
      </footer>

      <div class="cloud x1"></div>
      <div class="cloud x2"></div>
      <div class="cloud x3"></div>
      <div class="cloud x4"></div>
      <div class="cloud x5"></div>

    </div> <!-- /container -->
  </div>
  <!-- Test du background animé ! (responsive et fonctionnel sous ANDROID et iOS (testé)) -->



  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>
