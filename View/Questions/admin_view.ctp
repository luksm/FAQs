<div class="faqs view">
<h2><?php echo __('Question'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Question'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['question']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Answer'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['answer']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Active'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['active']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sort'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['sort']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($faq['Question']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Question'), array('action' => 'edit', $faq['Question']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Question'), array('action' => 'delete', $faq['Question']['id']), null, __('Are you sure you want to delete # %s?', $faq['Question']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?> </li>
    </ul>
</div>
