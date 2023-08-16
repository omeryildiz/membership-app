<div class="invoices view">
<h2><?php  echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Serial No'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_serial_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document No'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['document_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Accurency Unit'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['process_accurency_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account Unit'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['currency_account_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Money Unit'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['money_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kdv'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['kdv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Type'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['process_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Payment'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Net Debt'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['net_debt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Net Credit'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['net_credit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Invoices'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['closing_invoices']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $invoice['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Path'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Order']['id'], array('controller' => 'orders', 'action' => 'view', $invoice['Order']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consignment Datas'), array('controller' => 'consignment_datas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consignment Data'), array('controller' => 'consignment_datas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relevants'), array('controller' => 'relevants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relevant'), array('controller' => 'relevants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consignment Datas'); ?></h3>
	<?php if (!empty($invoice['ConsignmentData'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Work Order No'); ?></th>
		<th><?php echo __('Consumer Order No'); ?></th>
		<th><?php echo __('Line'); ?></th>
		<th><?php echo __('Pcs'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Consignment Note'); ?></th>
		<th><?php echo __('Paper Date'); ?></th>
		<th><?php echo __('Date Of Shipment'); ?></th>
		<th><?php echo __('Serial No'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Recipient'); ?></th>
		<th><?php echo __('Deliverer'); ?></th>
		<th><?php echo __('Entry Accept Control Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($invoice['ConsignmentData'] as $consignmentData): ?>
		<tr>
			<td><?php echo $consignmentData['id']; ?></td>
			<td><?php echo $consignmentData['work_order_no']; ?></td>
			<td><?php echo $consignmentData['consumer_order_no']; ?></td>
			<td><?php echo $consignmentData['line']; ?></td>
			<td><?php echo $consignmentData['pcs']; ?></td>
			<td><?php echo $consignmentData['quantity']; ?></td>
			<td><?php echo $consignmentData['consignment_note']; ?></td>
			<td><?php echo $consignmentData['paper_date']; ?></td>
			<td><?php echo $consignmentData['date_of_shipment']; ?></td>
			<td><?php echo $consignmentData['serial_no']; ?></td>
			<td><?php echo $consignmentData['total']; ?></td>
			<td><?php echo $consignmentData['recipient']; ?></td>
			<td><?php echo $consignmentData['deliverer']; ?></td>
			<td><?php echo $consignmentData['entry_accept_control_id']; ?></td>
			<td><?php echo $consignmentData['invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consignment_datas', 'action' => 'view', $consignmentData['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consignment_datas', 'action' => 'edit', $consignmentData['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consignment_datas', 'action' => 'delete', $consignmentData['id']), null, __('Are you sure you want to delete # %s?', $consignmentData['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consignment Data'), array('controller' => 'consignment_datas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($invoice['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Used Credit Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($invoice['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['used_credit_id']; ?></td>
			<td><?php echo $payment['invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Relevants'); ?></h3>
	<?php if (!empty($invoice['Relevant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($invoice['Relevant'] as $relevant): ?>
		<tr>
			<td><?php echo $relevant['stock_id']; ?></td>
			<td><?php echo $relevant['invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'relevants', 'action' => 'view', $relevant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'relevants', 'action' => 'edit', $relevant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'relevants', 'action' => 'delete', $relevant['id']), null, __('Are you sure you want to delete # %s?', $relevant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Relevant'), array('controller' => 'relevants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
