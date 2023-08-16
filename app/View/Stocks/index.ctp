<div class="stocks index">
	<h2><?php echo __('Stocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_name'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_type'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_code'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_status'); ?></th>
			<th><?php echo $this->Paginator->sort('buying_price'); ?></th>
			<th><?php echo $this->Paginator->sort('selling_price'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('min_stock'); ?></th>
			<th><?php echo $this->Paginator->sort('kdv'); ?></th>
			<th><?php echo $this->Paginator->sort('kdv_status'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_quantity'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stocks as $stock): ?>
	<tr>
		<td><?php echo h($stock['Stock']['id']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_name']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_type']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['description']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_code']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_status']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['buying_price']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['selling_price']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['currency_unit']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['min_stock']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['kdv']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['kdv_status']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_quantity']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stock['Stock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stock['Stock']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Relevants'), array('controller' => 'relevants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relevant'), array('controller' => 'relevants', 'action' => 'add')); ?> </li>
	</ul>
</div>
