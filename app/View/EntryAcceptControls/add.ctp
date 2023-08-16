<div class="entryAcceptControls form">
<?php echo $this->Form->create('EntryAcceptControl'); ?>
	<fieldset>
		<legend><?php echo __('Add Entry Accept Control'); ?></legend>
	<?php
		echo $this->Form->input('acceptance_date');
		echo $this->Form->input('recipient');
		echo $this->Form->input('physical_compliance');
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('technical_compliance');
		echo $this->Form->input('projects_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entry Accept Controls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consignment Datas'), array('controller' => 'consignment_datas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consignment Data'), array('controller' => 'consignment_datas', 'action' => 'add')); ?> </li>
	</ul>
</div>
