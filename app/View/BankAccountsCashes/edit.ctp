<div class="bankAccountsCashes form">
<?php echo $this->Form->create('BankAccountsCash'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bank Accounts Cash'); ?></legend>
	<?php
		echo $this->Form->input('bank_account_id');
		echo $this->Form->input('cash_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BankAccountsCash.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BankAccountsCash.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts Cashes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
