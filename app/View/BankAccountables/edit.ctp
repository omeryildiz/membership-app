<div class="bankAccountables form">
<?php echo $this->Form->create('BankAccountable'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bank Accountable'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BankAccountable.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BankAccountable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accountables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
