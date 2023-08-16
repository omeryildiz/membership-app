<div class="collaterals index">
	<h2><?php echo __('Collaterals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('collateral_type'); ?></th>
			<th><?php echo $this->Paginator->sort('tracking_number'); ?></th>
			<th><?php echo $this->Paginator->sort('collateral_number'); ?></th>
			<th><?php echo $this->Paginator->sort('cheque'); ?></th>
			<th><?php echo $this->Paginator->sort('warrant'); ?></th>
			<th><?php echo $this->Paginator->sort('process_type'); ?></th>
			<th><?php echo $this->Paginator->sort('debtor'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_account_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($collaterals as $collateral): ?>
	<tr>
		<td><?php echo h($collateral['Collateral']['id']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['collateral_type']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['tracking_number']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['collateral_number']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['cheque']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['warrant']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['process_type']); ?>&nbsp;</td>
		<td><?php echo h($collateral['Collateral']['debtor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($collateral['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $collateral['CurrencyAccount']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($collateral['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $collateral['BankAccount']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $collateral['Collateral']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $collateral['Collateral']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $collateral['Collateral']['id']), null, __('Are you sure you want to delete # %s?', $collateral['Collateral']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Collateral'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
