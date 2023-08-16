<div class="currencyAccountAddresses form">
<?php echo $this->Form->create('CurrencyAccountAddress'); ?>
	<fieldset>
		<legend><?php echo __('Add Currency Account Address'); ?></legend>
	<?php
		echo $this->Form->input('address_type');
		echo $this->Form->input('address');
		echo $this->Form->input('country');
		echo $this->Form->input('district');
		echo $this->Form->input('post_number');
		echo $this->Form->input('description');
		echo $this->Form->input('currency_account_id');
		echo $this->Form->input('city');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Currency Account Addresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
