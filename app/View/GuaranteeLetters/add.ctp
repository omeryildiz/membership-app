<div class="guaranteeLetters form">
<?php echo $this->Form->create('GuaranteeLetter'); ?>
	<fieldset>
		<legend><?php echo __('Add Guarantee Letter'); ?></legend>
	<?php
		echo $this->Form->input('letter_type');
		echo $this->Form->input('acceptor');
		echo $this->Form->input('beneficiary');
		echo $this->Form->input('guarantor');
		echo $this->Form->input('counter_guarantee');
		echo $this->Form->input('starting_date');
		echo $this->Form->input('bank_account_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('commission_rate');
		echo $this->Form->input('currency_account_id');
		echo $this->Form->input('expiration_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
