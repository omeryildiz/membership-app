<div class="currencyAccountEmails form">
<?php echo $this->Form->create('CurrencyAccountEmail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Currency Account Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('currency_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CurrencyAccountEmail.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CurrencyAccountEmail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Account Emails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
