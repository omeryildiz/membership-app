<div class="responsibles form">
<?php echo $this->Form->create('Responsible'); ?>
	<fieldset>
		<legend><?php echo __('Edit Responsible'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Responsible.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Responsible.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Responsibles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
