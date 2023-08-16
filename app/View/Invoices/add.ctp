<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Invoice'); ?></legend>
	<?php
		echo $this->Form->input('invoice_serial_no');
		echo $this->Form->input('invoice_date');
		echo $this->Form->input('document_no');
		echo $this->Form->input('process_accurency_unit');
		echo $this->Form->input('currency_account_unit');
		echo $this->Form->input('money_unit');
		echo $this->Form->input('kdv');
		echo $this->Form->input('process_type');
		echo $this->Form->input('invoice_payment');
		echo $this->Form->input('net_debt');
		echo $this->Form->input('net_credit');
		echo $this->Form->input('due_date');
		echo $this->Form->input('closing_invoices');
		echo $this->Form->input('discount');
		echo $this->Form->input('currency_account_id');
		echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add'));
		echo $this->Form->input('file_path');
		echo $this->Form->input('order_id',array('empty'=>'void'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
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
