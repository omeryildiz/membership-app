<div class="exchangeRates index">
	<h2><?php echo __('Exchange Rates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('short_name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('central_bank_receiving'); ?></th>
			<th><?php echo $this->Paginator->sort('central_bank_selling'); ?></th>
			<th><?php echo $this->Paginator->sort('processing_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($exchangeRates as $exchangeRate): ?>
	<tr>
		<td><?php echo h($exchangeRate['ExchangeRate']['id']); ?>&nbsp;</td>
		<td><?php echo h($exchangeRate['ExchangeRate']['short_name']); ?>&nbsp;</td>
		<td><?php echo h($exchangeRate['ExchangeRate']['description']); ?>&nbsp;</td>
		<td><?php echo h($exchangeRate['ExchangeRate']['central_bank_receiving']); ?>&nbsp;</td>
		<td><?php echo h($exchangeRate['ExchangeRate']['central_bank_selling']); ?>&nbsp;</td>
		<td><?php echo h($exchangeRate['ExchangeRate']['processing_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exchangeRate['ExchangeRate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exchangeRate['ExchangeRate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exchangeRate['ExchangeRate']['id']), null, __('Are you sure you want to delete # %s?', $exchangeRate['ExchangeRate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Exchange Rate'), array('action' => 'add')); ?></li>
	</ul>
</div>
