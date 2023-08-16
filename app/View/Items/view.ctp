<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Or Material Code'); ?></dt>
		<dd>
			<?php echo h($item['Item']['service_or_material_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Or Material Kind'); ?></dt>
		<dd>
			<?php echo h($item['Item']['service_or_material_kind']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($item['Item']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($item['Item']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcs'); ?></dt>
		<dd>
			<?php echo h($item['Item']['pcs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Price'); ?></dt>
		<dd>
			<?php echo h($item['Item']['unit_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($item['Item']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($item['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Name'); ?></th>
		<th><?php echo __('Agreement Starting Date'); ?></th>
		<th><?php echo __('Agreement Expiration Date'); ?></th>
		<th><?php echo __('Agreement Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['project_name']; ?></td>
			<td><?php echo $project['agreement_starting_date']; ?></td>
			<td><?php echo $project['agreement_expiration_date']; ?></td>
			<td><?php echo $project['agreement_amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($item['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order No'); ?></th>
		<th><?php echo __('Order Date'); ?></th>
		<th><?php echo __('Document No'); ?></th>
		<th><?php echo __('Process Accurency Unit'); ?></th>
		<th><?php echo __('Currency Account Unit'); ?></th>
		<th><?php echo __('Money Unit'); ?></th>
		<th><?php echo __('Kdv'); ?></th>
		<th><?php echo __('Shipment Date'); ?></th>
		<th><?php echo __('Order Type'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('Order Approval'); ?></th>
		<th><?php echo __('Paper Date'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['order_no']; ?></td>
			<td><?php echo $order['order_date']; ?></td>
			<td><?php echo $order['document_no']; ?></td>
			<td><?php echo $order['process_accurency_unit']; ?></td>
			<td><?php echo $order['currency_account_unit']; ?></td>
			<td><?php echo $order['money_unit']; ?></td>
			<td><?php echo $order['kdv']; ?></td>
			<td><?php echo $order['shipment_date']; ?></td>
			<td><?php echo $order['order_type']; ?></td>
			<td><?php echo $order['currency_account_id']; ?></td>
			<td><?php echo $order['order_approval']; ?></td>
			<td><?php echo $order['paper_date']; ?></td>
			<td><?php echo $order['due_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
