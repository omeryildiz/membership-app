<div class="stocks form">
<?php echo $this->Form->create('Stock'); ?>
	<fieldset>
		<legend><?php echo __('Edit Stock'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('stock_name');
		echo $this->Form->input('stock_type');
		echo $this->Form->input('description');
		echo $this->Form->input('stock_code');
		echo $this->Form->input('stock_status');
		echo $this->Form->input('buying_price');
		echo $this->Form->input('selling_price');
		echo $this->Form->input('currency_unit');
		echo $this->Form->input('min_stock');
		echo $this->Form->input('kdv');
		echo $this->Form->input('kdv_status');
		echo $this->Form->input('stock_quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stock.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Stock.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Relevants'), array('controller' => 'relevants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relevant'), array('controller' => 'relevants', 'action' => 'add')); ?> </li>
	</ul>
</div>
