<div class="bankAccounts index">
	<h2><?php echo __('Bank Accounts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_account_number'); ?></th>
			<th><?php echo $this->Paginator->sort('iban'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_name'); ?></th>
			<th><?php echo $this->Paginator->sort('account_name'); ?></th>
			<th><?php echo $this->Paginator->sort('account_type'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_bank'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('balance_due'); ?></th>
			<th><?php echo $this->Paginator->sort('balance_receivable'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bankAccounts as $bankAccount): ?>
	<tr>
		<td><?php echo h($bankAccount['BankAccount']['id']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['bank_account_number']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['iban']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['account_name']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['account_type']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['currency_unit']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['branch_bank']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['tel']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['description']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['address']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['balance_due']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['balance_receivable']); ?>&nbsp;</td>
		<td><?php echo h($bankAccount['BankAccount']['fax']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bankAccount['BankAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bankAccount['BankAccount']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bankAccount['BankAccount']['id']), null, __('Are you sure you want to delete # %s?', $bankAccount['BankAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bank Account'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accountables'), array('controller' => 'bank_accountables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Accountable'), array('controller' => 'bank_accountables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('controller' => 'collaterals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collateral'), array('controller' => 'collaterals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('controller' => 'credit_limits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('controller' => 'credit_limits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts Cashes'), array('controller' => 'currency_accounts_cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Accounts Cash'), array('controller' => 'currency_accounts_cashes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('controller' => 'guarantee_letters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('controller' => 'guarantee_letters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Used Credits'), array('controller' => 'used_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Used Credit'), array('controller' => 'used_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
