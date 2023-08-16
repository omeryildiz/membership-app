<div class="cashes form">
<?php echo $this->Form->create('Cash'); ?>
	<fieldset>
		<legend><?php echo __('Add Cash'); ?></legend>
	<?php
		echo $this->Form->input('case_name');
		echo $this->Form->input('currency_unit');
		echo $this->Form->input('description');
		echo $this->Form->input('incoming');
		echo $this->Form->input('outgoing');
		echo $this->Form->input('balance');
		echo $this->Form->input('case_code');
		echo $this->Form->input('BankAccount');
		echo $this->Form->input('CurrencyAccount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cashes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
