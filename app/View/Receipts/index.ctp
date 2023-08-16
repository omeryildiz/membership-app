<div class="receipts index">
	<h2><?php echo __('Receipts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('serial_no'); ?></th>
			<th><?php echo $this->Paginator->sort('process_no'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('voucher'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('process_accurency_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($receipts as $receipt): ?>
	<tr>
		<td><?php echo h($receipt['Receipt']['id']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['serial_no']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['process_no']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['due_date']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['date']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['voucher']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['description']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['amount']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['currency_account_unit']); ?>&nbsp;</td>
		<td><?php echo h($receipt['Receipt']['process_accurency_unit']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($receipt['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $receipt['CurrencyAccount']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $receipt['Receipt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $receipt['Receipt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $receipt['Receipt']['id']), null, __('Are you sure you want to delete # %s?', $receipt['Receipt']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Receipt'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
