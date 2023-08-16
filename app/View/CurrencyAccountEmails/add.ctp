<div class="currencyAccountEmails form">
<?php echo $this->Form->create('CurrencyAccountEmail'); ?>
	<fieldset>
		<legend><?php echo __('Add Currency Account Email'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('currency_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Currency Account Emails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
