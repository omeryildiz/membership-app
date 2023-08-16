<div class="usedCredits form">
<?php echo $this->Form->create('UsedCredit'); ?>
	<fieldset>
		<legend><?php echo __('Add Used Credit'); ?></legend>
	<?php
		echo $this->Form->input('credit_amount');
		echo $this->Form->input('credit_debt');
		echo $this->Form->input('credit_payment_date');
		echo $this->Form->input('min_payment_amount');
		echo $this->Form->input('file_expenses');
		echo $this->Form->input('commission_fee');
		echo $this->Form->input('bank_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Used Credits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
