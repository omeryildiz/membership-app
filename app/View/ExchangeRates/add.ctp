<div class="exchangeRates form">
<?php echo $this->Form->create('ExchangeRate'); ?>
	<fieldset>
		<legend><?php echo __('Add Exchange Rate'); ?></legend>
	<?php
		echo $this->Form->input('short_name');
		echo $this->Form->input('description');
		echo $this->Form->input('central_bank_receiving');
		echo $this->Form->input('central_bank_selling');
		echo $this->Form->input('processing_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exchange Rates'), array('action' => 'index')); ?></li>
	</ul>
</div>
