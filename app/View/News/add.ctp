<!-- Affichage du form via des helper pour créer une new -->
    <html>
    <body>
        <?php
            echo $this->Form->create('News');
            echo $this->Form->input('titre');
            echo $this->Form->input('date');
            echo $this->Form->input('administrateur_id');
            echo $this->Form->input('texte', array('rows' => '3'));
            echo $this->Form->end('Sauvegarder le post');
        ?>
    </body>
</html>