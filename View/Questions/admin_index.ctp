<div class="faqs index">
    <h2><?php echo __('Questions'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('question'); ?></th>
            <th><?php echo $this->Paginator->sort('answer'); ?></th>
            <th><?php echo $this->Paginator->sort('active'); ?></th>
            <th><?php echo $this->Paginator->sort('sort'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($faqs as $faq): ?>
    <tr>
        <td><?php echo h($faq['Question']['id']); ?>&nbsp;</td>
        <td><?php echo h($faq['Question']['question']); ?>&nbsp;</td>
        <td><?php echo h($faq['Question']['answer']); ?>&nbsp;</td>
        <td><?php echo h($faq['Question']['active']); ?>&nbsp;</td>
        <td><?php echo h($faq['Question']['sort']); ?>&nbsp;</td>
        <td><?php echo h($faq['Question']['created']); ?>&nbsp;</td>
        <td><?php echo h($faq['Question']['modified']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View'), array('action' => 'view', $faq['Question']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $faq['Question']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $faq['Question']['id']), null, __('Are you sure you want to delete # %s?', $faq['Question']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>    </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?></li>
    </ul>
</div>
