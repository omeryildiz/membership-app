<div class="creditLimits form">
<?php echo $this->Form->create('CreditLimit'); ?>
	<fieldset>
		<legend><?php echo __('Add Credit Limit'); ?></legend>
	<?php
		echo $this->Form->input('credit_limit');
		echo $this->Form->input('cash_blockage');
		echo $this->Form->input('estate_mortgage');
		echo $this->Form->input('against_signature');
		echo $this->Form->input('bank_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Credit Limits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
