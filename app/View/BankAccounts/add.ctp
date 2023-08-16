<div class="bankAccounts form">
<?php echo $this->Form->create('BankAccount'); ?>
	<fieldset>
		<legend><?php echo __('Add Bank Account'); ?></legend>
	<?php
		echo $this->Form->input('bank_account_number');
		echo $this->Form->input('iban');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('account_name');
		echo $this->Form->input('account_type');
		echo $this->Form->input('currency_unit');
		echo $this->Form->input('branch_bank');
		echo $this->Form->input('tel');
		echo $this->Form->input('description');
		echo $this->Form->input('address');
		echo $this->Form->input('balance_due');
		echo $this->Form->input('balance_receivable');
		echo $this->Form->input('fax');
		//echo $this->Form->input('Cash');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accountables'), array('controller' => 'bank_accountables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Accountable'), array('controller' => 'bank_accountables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('controller' => 'collaterals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collateral'), array('controller' => 'collaterals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('controller' => 'credit_limits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('controller' => 'credit_limits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts Cashes'), array('controller' => 'currency_accounts_cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Accounts Cash'), array('controller' => 'currency_accounts_cashes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('controller' => 'guarantee_letters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('controller' => 'guarantee_letters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Used Credits'), array('controller' => 'used_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Used Credit'), array('controller' => 'used_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
