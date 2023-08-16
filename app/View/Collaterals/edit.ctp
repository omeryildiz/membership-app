<div class="collaterals form">
<?php echo $this->Form->create('Collateral'); ?>
	<fieldset>
		<legend><?php echo __('Edit Collateral'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('collateral_type');
		echo $this->Form->input('tracking_number');
		echo $this->Form->input('collateral_number');
		echo $this->Form->input('cheque');
		echo $this->Form->input('warrant');
		echo $this->Form->input('process_type');
		echo $this->Form->input('debtor');
		echo $this->Form->input('currency_account_id');
		echo $this->Form->input('bank_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Collateral.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Collateral.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
