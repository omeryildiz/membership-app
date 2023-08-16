<div class="firmBooks form">
<?php echo $this->Form->create('FirmBook'); ?>
	<fieldset>
		<legend><?php echo __('Edit Firm Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('tel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FirmBook.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FirmBook.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Firm Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
	</ul>
</div>
