<div class="consignmentDatas form">
<?php echo $this->Form->create('ConsignmentData'); ?>
	<fieldset>
		<legend><?php echo __('Add Consignment Data'); ?></legend>
	<?php
		echo $this->Form->input('work_order_no');
		echo $this->Form->input('consumer_order_no');
		echo $this->Form->input('line');
		echo $this->Form->input('pcs');
		echo $this->Form->input('quantity');
		echo $this->Form->input('consignment_note');
		echo $this->Form->input('paper_date');
		echo $this->Form->input('date_of_shipment');
		echo $this->Form->input('serial_no');
		echo $this->Form->input('total');
		echo $this->Form->input('recipient');
		echo $this->Form->input('deliverer');
		echo $this->Form->input('entry_accept_control_id');
		echo $this->Form->input('invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consignment Datas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Accept Controls'), array('controller' => 'entry_accept_controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Accept Control'), array('controller' => 'entry_accept_controls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
