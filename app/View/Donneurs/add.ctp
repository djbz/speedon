<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('Donneur');?>
    <fieldset>
        <legend><?php echo __('Ajouter Donneur'); ?></legend>
        <?php echo $this->Form->input('mail');
        echo $this->Form->input('adresse_postale');
        echo $this->Form->input('numero_tel');
        echo $this->Form->input('nom');
        echo $this->Form->input('prenom');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ajouter'));?>
</div>