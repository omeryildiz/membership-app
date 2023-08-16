<div class="orders view">
<h2><?php  echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order No'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document No'); ?></dt>
		<dd>
			<?php echo h($order['Order']['document_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Accurency Unit'); ?></dt>
		<dd>
			<?php echo h($order['Order']['process_accurency_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account Unit'); ?></dt>
		<dd>
			<?php echo h($order['Order']['currency_account_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Money Unit'); ?></dt>
		<dd>
			<?php echo h($order['Order']['money_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kdv'); ?></dt>
		<dd>
			<?php echo h($order['Order']['kdv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipment Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Type'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $order['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Approval'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paper Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['paper_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['due_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($order['Invoice'])): ?>
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
		<th><?php echo __('Consignment Data Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($order['Invoice'] as $invoice): ?>
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
			<td><?php echo $invoice['consignment_data_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($order['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Or Material Code'); ?></th>
		<th><?php echo __('Service Or Material Kind'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th><?php echo __('Unit'); ?></th>
		<th><?php echo __('Pcs'); ?></th>
		<th><?php echo __('Unit Price'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($order['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['service_or_material_code']; ?></td>
			<td><?php echo $item['service_or_material_kind']; ?></td>
			<td><?php echo $item['discount']; ?></td>
			<td><?php echo $item['unit']; ?></td>
			<td><?php echo $item['pcs']; ?></td>
			<td><?php echo $item['unit_price']; ?></td>
			<td><?php echo $item['total']; ?></td>
			<td><?php echo $item['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
