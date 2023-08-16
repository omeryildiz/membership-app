<div class="offers form">
<?php echo $this->Form->create('Offer'); ?>
	<fieldset>
		<legend><?php echo __('Add Offer'); ?></legend>
	<?php
		echo $this->Form->input('firm_unit');
		echo $this->Form->input('no');
		echo $this->Form->input('date');
		echo $this->Form->input('cost');
		echo $this->Form->input('details');
		echo $this->Form->input('type');
		echo $this->Form->input('status');
		echo $this->Form->input('project_id',array('empty'=>'void'));
		echo $this->Form->input('firm_book_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firm Books'), array('controller' => 'firm_books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm Book'), array('controller' => 'firm_books', 'action' => 'add')); ?> </li>
	</ul>
</div>
