<div class="receipts form">
<?php echo $this->Form->create('Receipt'); ?>
	<fieldset>
		<legend><?php echo __('Add Receipt'); ?></legend>
	<?php
		echo $this->Form->input('serial_no');
		echo $this->Form->input('process_no');
		echo $this->Form->input('due_date');
		echo $this->Form->input('date');
		echo $this->Form->input('voucher');
		echo $this->Form->input('description');
		echo $this->Form->input('amount');
		echo $this->Form->input('currency_account_unit');
		echo $this->Form->input('process_accurency_unit');
		echo $this->Form->input('currency_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Receipts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
