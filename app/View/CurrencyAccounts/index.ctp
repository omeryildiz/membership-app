<div class="currencyAccounts index">
	<h2><?php echo __('Currency Accounts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_code'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_type'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('default_price'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('balance_due'); ?></th>
			<th><?php echo $this->Paginator->sort('remaining_receivable'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($currencyAccounts as $currencyAccount): ?>
	<tr>
		<td><?php echo h($currencyAccount['CurrencyAccount']['id']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['currency_account_code']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['currency_account_type']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['currency_account_unit']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['default_price']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['title']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['balance_due']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccount['CurrencyAccount']['remaining_receivable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $currencyAccount['CurrencyAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $currencyAccount['CurrencyAccount']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $currencyAccount['CurrencyAccount']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccount['CurrencyAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Currency Account'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('controller' => 'collaterals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collateral'), array('controller' => 'collaterals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Addresses'), array('controller' => 'currency_account_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Address'), array('controller' => 'currency_account_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Contact Numbers'), array('controller' => 'currency_account_contact_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Contact Number'), array('controller' => 'currency_account_contact_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Emails'), array('controller' => 'currency_account_emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Email'), array('controller' => 'currency_account_emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('controller' => 'guarantee_letters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('controller' => 'guarantee_letters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsibles'), array('controller' => 'responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsible'), array('controller' => 'responsibles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
