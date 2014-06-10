<html>
    <body>

        <h1>Editer le post</h1>
        <?php
echo $this->Form->create('News');
echo $this->Form->input('titre');
echo $this->Form->input('texte');
echo $this->Form->input('date');
echo $this->Form->input('administrateur_id');
echo $this->Form->end('Sauvegarder le post');
        ?>
    </body>
</html>