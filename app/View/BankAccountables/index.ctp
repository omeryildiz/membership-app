<div class="bankAccountables index">
	<h2><?php echo __('Bank Accountables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('surname'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_account_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bankAccountables as $bankAccountable): ?>
	<tr>
		<td><?php echo h($bankAccountable['BankAccountable']['id']); ?>&nbsp;</td>
		<td><?php echo h($bankAccountable['BankAccountable']['name']); ?>&nbsp;</td>
		<td><?php echo h($bankAccountable['BankAccountable']['surname']); ?>&nbsp;</td>
		<td><?php echo h($bankAccountable['BankAccountable']['tel']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bankAccountable['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $bankAccountable['BankAccount']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bankAccountable['BankAccountable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bankAccountable['BankAccountable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bankAccountable['BankAccountable']['id']), null, __('Are you sure you want to delete # %s?', $bankAccountable['BankAccountable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bank Accountable'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
