<div class="exchangeRates view">
<h2><?php  echo __('Exchange Rate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exchangeRate['ExchangeRate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Name'); ?></dt>
		<dd>
			<?php echo h($exchangeRate['ExchangeRate']['short_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($exchangeRate['ExchangeRate']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Central Bank Receiving'); ?></dt>
		<dd>
			<?php echo h($exchangeRate['ExchangeRate']['central_bank_receiving']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Central Bank Selling'); ?></dt>
		<dd>
			<?php echo h($exchangeRate['ExchangeRate']['central_bank_selling']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processing Date'); ?></dt>
		<dd>
			<?php echo h($exchangeRate['ExchangeRate']['processing_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exchange Rate'), array('action' => 'edit', $exchangeRate['ExchangeRate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exchange Rate'), array('action' => 'delete', $exchangeRate['ExchangeRate']['id']), null, __('Are you sure you want to delete # %s?', $exchangeRate['ExchangeRate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exchange Rates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exchange Rate'), array('action' => 'add')); ?> </li>
	</ul>
</div>
