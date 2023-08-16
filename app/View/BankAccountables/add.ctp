<div class="bankAccountables form">
<?php echo $this->Form->create('BankAccountable'); ?>
	<fieldset>
		<legend><?php echo __('Add Bank Accountable'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('tel');
		echo $this->Form->input('bank_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bank Accountables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
