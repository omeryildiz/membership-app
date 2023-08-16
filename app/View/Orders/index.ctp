<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('order_date'); ?></th>
			<th><?php echo $this->Paginator->sort('document_no'); ?></th>
			<th><?php echo $this->Paginator->sort('process_accurency_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('money_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('kdv'); ?></th>
			<th><?php echo $this->Paginator->sort('shipment_date'); ?></th>
			<th><?php echo $this->Paginator->sort('order_type'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_approval'); ?></th>
			<th><?php echo $this->Paginator->sort('paper_date'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_no']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['document_no']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['process_accurency_unit']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['currency_account_unit']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['money_unit']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['kdv']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipment_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $order['CurrencyAccount']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['order_approval']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['paper_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['due_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
