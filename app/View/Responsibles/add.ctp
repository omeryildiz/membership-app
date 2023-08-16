<div class="responsibles form">
<?php echo $this->Form->create('Responsible'); ?>
	<fieldset>
		<legend><?php echo __('Add Responsible'); ?></legend>
	<?php
		echo $this->Form->input('responsible_name');
		echo $this->Form->input('responsible_surname');
		echo $this->Form->input('currency_account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Responsibles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
