<div class="creditLimits index">
	<h2><?php echo __('Credit Limits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_limit'); ?></th>
			<th><?php echo $this->Paginator->sort('cash_blockage'); ?></th>
			<th><?php echo $this->Paginator->sort('estate_mortgage'); ?></th>
			<th><?php echo $this->Paginator->sort('against_signature'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_account_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($creditLimits as $creditLimit): ?>
	<tr>
		<td><?php echo h($creditLimit['CreditLimit']['id']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['credit_limit']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['cash_blockage']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['estate_mortgage']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['against_signature']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($creditLimit['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $creditLimit['BankAccount']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $creditLimit['CreditLimit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $creditLimit['CreditLimit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $creditLimit['CreditLimit']['id']), null, __('Are you sure you want to delete # %s?', $creditLimit['CreditLimit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
