<html>
    <!-- Gestionnaire de news author Pierre Gaillard -->
    <body>

        <h1>News du jours youpi !</h1> 
        <?php echo $this->Html->link('Ajouter un Post',array('controller' => 'news', 'action' => 'add')); ?>
            

        
        <table>

        <?php foreach ($news as $new): ?> <tr>
        <td>
        <!-- Prends pas l'UTF 8 ????????? -->
        <?php echo $this->Html->link($new['News']['titre'], array('controller' => 'news', 'action' => 'view', $new['News']['id'])); ?>
        
        <?php echo $this->Html->link('Editer', array('action' => 'edit', $new['News']['id'])); ?>
        
        <?php echo $this->Form->postLink('Supprimer',array('action' => 'delete', $new['News']['id']),array('confirm' => 'Etes-vous sûr ?'));?>
        
        </td> 
        
        <td><?php echo $new['News']['date']; ?></td>

        </tr> <?php endforeach; ?> <?php unset($new); ?>

        </table>
        
    </body>
</html>