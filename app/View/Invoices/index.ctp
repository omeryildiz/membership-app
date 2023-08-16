<div class="invoices index">
	<h2><?php echo __('Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_serial_no'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_date'); ?></th>
			<th><?php echo $this->Paginator->sort('document_no'); ?></th>
			<th><?php echo $this->Paginator->sort('process_accurency_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('money_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('kdv'); ?></th>
			<th><?php echo $this->Paginator->sort('process_type'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_payment'); ?></th>
			<th><?php echo $this->Paginator->sort('net_debt'); ?></th>
			<th><?php echo $this->Paginator->sort('net_credit'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_invoices'); ?></th>
			<th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file_path'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($invoices as $invoice): ?>
	<tr>
		<td><?php echo h($invoice['Invoice']['id']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['invoice_serial_no']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['invoice_date']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['document_no']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['process_accurency_unit']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['currency_account_unit']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['money_unit']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['kdv']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['process_type']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['invoice_payment']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['net_debt']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['net_credit']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['due_date']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['closing_invoices']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['discount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $invoice['CurrencyAccount']['id'])); ?>
		</td>
		<td><?php echo h($invoice['Invoice']['file_path']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Order']['id'], array('controller' => 'orders', 'action' => 'view', $invoice['Order']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?></li>
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
