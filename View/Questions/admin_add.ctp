<div class="faqs form">
<?php echo $this->Form->create('Question'); ?>
    <fieldset>
        <legend><?php echo __('Add Question'); ?></legend>
    <?php
        echo $this->Form->input('question');
        echo $this->Form->input('answer');
        echo $this->Form->input('active');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?></li>
    </ul>
</div>
