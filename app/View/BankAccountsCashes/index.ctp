<div class="bankAccountsCashes index">
	<h2><?php echo __('Bank Accounts Cashes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('bank_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cash_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bankAccountsCashes as $bankAccountsCash): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($bankAccountsCash['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $bankAccountsCash['BankAccount']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bankAccountsCash['Cash']['id'], array('controller' => 'cashes', 'action' => 'view', $bankAccountsCash['Cash']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bankAccountsCash['BankAccountsCash']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bankAccountsCash['BankAccountsCash']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bankAccountsCash['BankAccountsCash']['id']), null, __('Are you sure you want to delete # %s?', $bankAccountsCash['BankAccountsCash']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bank Accounts Cash'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
