<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Ajouter User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('Association' => 'Association', 'Donneur' => 'Donneur')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ajouter'));?>
</div>