<div class="creditLimits form">
<?php echo $this->Form->create('CreditLimit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit Limit'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CreditLimit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CreditLimit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
