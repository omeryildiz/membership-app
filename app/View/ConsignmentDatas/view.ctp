<div class="consignmentDatas view">
<h2><?php  echo __('Consignment Data'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Order No'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['work_order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer Order No'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['consumer_order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Line'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcs'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['pcs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consignment Note'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['consignment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paper Date'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['paper_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Shipment'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['date_of_shipment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial No'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['serial_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipient'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['recipient']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deliverer'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['deliverer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Accept Control'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consignmentData['EntryAcceptControl']['name'], array('controller' => 'entry_accept_controls', 'action' => 'view', $consignmentData['EntryAcceptControl']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Id'); ?></dt>
		<dd>
			<?php echo h($consignmentData['ConsignmentData']['invoice_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consignment Data'), array('action' => 'edit', $consignmentData['ConsignmentData']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consignment Data'), array('action' => 'delete', $consignmentData['ConsignmentData']['id']), null, __('Are you sure you want to delete # %s?', $consignmentData['ConsignmentData']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consignment Datas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consignment Data'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Accept Controls'), array('controller' => 'entry_accept_controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Accept Control'), array('controller' => 'entry_accept_controls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($consignmentData['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice Serial No'); ?></th>
		<th><?php echo __('Invoice Date'); ?></th>
		<th><?php echo __('Document No'); ?></th>
		<th><?php echo __('Process Accurency Unit'); ?></th>
		<th><?php echo __('Currency Account Unit'); ?></th>
		<th><?php echo __('Money Unit'); ?></th>
		<th><?php echo __('Kdv'); ?></th>
		<th><?php echo __('Process Type'); ?></th>
		<th><?php echo __('Invoice Payment'); ?></th>
		<th><?php echo __('Net Debt'); ?></th>
		<th><?php echo __('Net Credit'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th><?php echo __('Closing Invoices'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('File Path'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($consignmentData['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['invoice_serial_no']; ?></td>
			<td><?php echo $invoice['invoice_date']; ?></td>
			<td><?php echo $invoice['document_no']; ?></td>
			<td><?php echo $invoice['process_accurency_unit']; ?></td>
			<td><?php echo $invoice['currency_account_unit']; ?></td>
			<td><?php echo $invoice['money_unit']; ?></td>
			<td><?php echo $invoice['kdv']; ?></td>
			<td><?php echo $invoice['process_type']; ?></td>
			<td><?php echo $invoice['invoice_payment']; ?></td>
			<td><?php echo $invoice['net_debt']; ?></td>
			<td><?php echo $invoice['net_credit']; ?></td>
			<td><?php echo $invoice['due_date']; ?></td>
			<td><?php echo $invoice['closing_invoices']; ?></td>
			<td><?php echo $invoice['discount']; ?></td>
			<td><?php echo $invoice['currency_account_id']; ?></td>
			<td><?php echo $invoice['file_path']; ?></td>
			<td><?php echo $invoice['order_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
