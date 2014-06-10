<!-- Gestionnaire de News author Pierre Gaillard -->
<html>
<body> 
    <h1><?php echo h($news['News']['titre']); ?></h1>

    <p><small>Créé le : <?php echo $news['News']['date']; ?></small></p>

    <p><?php echo h($news['News']['texte']); ?></p>
</body>
</html>
