<div class="paymentPlans form">
<?php echo $this->Form->create('PaymentPlan'); ?>
	<fieldset>
		<legend><?php echo __('Add Payment Plan'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Payment Plans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
