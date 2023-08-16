<div class="guaranteeLetters index">
	<h2><?php echo __('Guarantee Letters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('letter_type'); ?></th>
			<th><?php echo $this->Paginator->sort('acceptor'); ?></th>
			<th><?php echo $this->Paginator->sort('beneficiary'); ?></th>
			<th><?php echo $this->Paginator->sort('guarantor'); ?></th>
			<th><?php echo $this->Paginator->sort('counter_guarantee'); ?></th>
			<th><?php echo $this->Paginator->sort('starting_date'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('commission_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('expiration_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($guaranteeLetters as $guaranteeLetter): ?>
	<tr>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['id']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['letter_type']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['acceptor']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['beneficiary']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['guarantor']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['counter_guarantee']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['starting_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guaranteeLetter['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $guaranteeLetter['BankAccount']['id'])); ?>
		</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['amount']); ?>&nbsp;</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['commission_rate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guaranteeLetter['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $guaranteeLetter['CurrencyAccount']['id'])); ?>
		</td>
		<td><?php echo h($guaranteeLetter['GuaranteeLetter']['expiration_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guaranteeLetter['GuaranteeLetter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guaranteeLetter['GuaranteeLetter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guaranteeLetter['GuaranteeLetter']['id']), null, __('Are you sure you want to delete # %s?', $guaranteeLetter['GuaranteeLetter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
