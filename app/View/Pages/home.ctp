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
    <?php 
        echo $this->element('index-news', array('news' => $news));
    ?>
  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Vous souhaitez rejoindre Speedon ?</h2>
          <p> Rejoignez le plus grand réseau d'associations !</p>
          <p><?php echo $this->Html->Link('Nous rejoindre',array('controller'=>'Users','action'=>'add'),array('class' => 'btn btn-default')); ?></p>
        </div>
        <div class="col-md-4">
          <h2>Envie de plus d'informations ?</h2>
          <p>N'hésitez pas ! Contactez nous et posez nous toutes les questions que vous souhaitez !</p>
          <p><?php echo $this->Html->Link('Contactez-nous',array('controller'=>'Contact','action'=>'index'),array('class' => 'btn btn-default')); ?></p>
        </div>
        <div class="col-md-4">
          <h2>Nouveau visiteur ? Lisez notre FAQ !</h2>
          <p>Vous y trouverez plein d'informations vitales ! </p>
          <p><?php echo $this->Html->Link('Lire la FAQ',array('controller'=>'FAQ','action'=>'index'),array('class' => 'btn btn-default')); ?></p>
        </div>
      </div>
	  </div>
  <!-- Test du background animé ! (responsive et fonctionnel sous ANDROID et iOS (testé)) -->



  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>
