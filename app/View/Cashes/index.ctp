<div class="cashes index">
	<h2><?php echo __('Cashes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('case_name'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('incoming'); ?></th>
			<th><?php echo $this->Paginator->sort('outgoing'); ?></th>
			<th><?php echo $this->Paginator->sort('balance'); ?></th>
			<th><?php echo $this->Paginator->sort('case_code'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($cashes as $cash): ?>
	<tr>
		<td><?php echo h($cash['Cash']['id']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['case_name']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['currency_unit']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['description']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['incoming']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['outgoing']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['balance']); ?>&nbsp;</td>
		<td><?php echo h($cash['Cash']['case_code']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cash['Cash']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cash['Cash']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cash['Cash']['id']), null, __('Are you sure you want to delete # %s?', $cash['Cash']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

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
		<li><?php echo $this->Html->link(__('New Cash'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
