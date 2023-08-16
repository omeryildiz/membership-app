<div class="stocks view">
<h2><?php  echo __('Stock'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Name'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Type'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Code'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Status'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buying Price'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['buying_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Selling Price'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['selling_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Unit'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['currency_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Stock'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['min_stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kdv'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['kdv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kdv Status'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['kdv_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Quantity'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relevants'), array('controller' => 'relevants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relevant'), array('controller' => 'relevants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Relevants'); ?></h3>
	<?php if (!empty($stock['Relevant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stock['Relevant'] as $relevant): ?>
		<tr>
			<td><?php echo $relevant['stock_id']; ?></td>
			<td><?php echo $relevant['invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'relevants', 'action' => 'view', $relevant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'relevants', 'action' => 'edit', $relevant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'relevants', 'action' => 'delete', $relevant['id']), null, __('Are you sure you want to delete # %s?', $relevant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Relevant'), array('controller' => 'relevants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
