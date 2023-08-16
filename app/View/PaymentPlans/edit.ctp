<div class="paymentPlans form">
<?php echo $this->Form->create('PaymentPlan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Payment Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('type');
		echo $this->Form->input('unit');
		echo $this->Form->input('project_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PaymentPlan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PaymentPlan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payment Plans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
