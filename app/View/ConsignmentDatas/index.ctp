<div class="consignmentDatas index">
	<h2><?php echo __('Consignment Datas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('work_order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('consumer_order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('line'); ?></th>
			<th><?php echo $this->Paginator->sort('pcs'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('consignment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('paper_date'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_shipment'); ?></th>
			<th><?php echo $this->Paginator->sort('serial_no'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('recipient'); ?></th>
			<th><?php echo $this->Paginator->sort('deliverer'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_accept_control_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($consignmentDatas as $consignmentData): ?>
	<tr>
		<td><?php echo h($consignmentData['ConsignmentData']['id']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['work_order_no']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['consumer_order_no']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['line']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['pcs']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['consignment_note']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['paper_date']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['date_of_shipment']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['serial_no']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['total']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['recipient']); ?>&nbsp;</td>
		<td><?php echo h($consignmentData['ConsignmentData']['deliverer']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consignmentData['EntryAcceptControl']['name'], array('controller' => 'entry_accept_controls', 'action' => 'view', $consignmentData['EntryAcceptControl']['id'])); ?>
		</td>
		<td><?php echo h($consignmentData['ConsignmentData']['invoice_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consignmentData['ConsignmentData']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consignmentData['ConsignmentData']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consignmentData['ConsignmentData']['id']), null, __('Are you sure you want to delete # %s?', $consignmentData['ConsignmentData']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consignment Data'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Accept Controls'), array('controller' => 'entry_accept_controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Accept Control'), array('controller' => 'entry_accept_controls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
