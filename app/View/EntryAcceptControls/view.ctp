<div class="entryAcceptControls view">
<h2><?php  echo __('Entry Accept Control'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acceptance Date'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['acceptance_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipient'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['recipient']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Physical Compliance'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['physical_compliance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Technical Compliance'); ?></dt>
		<dd>
			<?php echo h($entryAcceptControl['EntryAcceptControl']['technical_compliance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entryAcceptControl['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $entryAcceptControl['Projects']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Accept Control'), array('action' => 'edit', $entryAcceptControl['EntryAcceptControl']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entry Accept Control'), array('action' => 'delete', $entryAcceptControl['EntryAcceptControl']['id']), null, __('Are you sure you want to delete # %s?', $entryAcceptControl['EntryAcceptControl']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Accept Controls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Accept Control'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consignment Datas'), array('controller' => 'consignment_datas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consignment Data'), array('controller' => 'consignment_datas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consignment Datas'); ?></h3>
	<?php if (!empty($entryAcceptControl['ConsignmentData'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Work Order No'); ?></th>
		<th><?php echo __('Consumer Order No'); ?></th>
		<th><?php echo __('Line'); ?></th>
		<th><?php echo __('Pcs'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Consignment Note'); ?></th>
		<th><?php echo __('Paper Date'); ?></th>
		<th><?php echo __('Date Of Shipment'); ?></th>
		<th><?php echo __('Serial No'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Recipient'); ?></th>
		<th><?php echo __('Deliverer'); ?></th>
		<th><?php echo __('Entry Accept Control Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entryAcceptControl['ConsignmentData'] as $consignmentData): ?>
		<tr>
			<td><?php echo $consignmentData['id']; ?></td>
			<td><?php echo $consignmentData['work_order_no']; ?></td>
			<td><?php echo $consignmentData['consumer_order_no']; ?></td>
			<td><?php echo $consignmentData['line']; ?></td>
			<td><?php echo $consignmentData['pcs']; ?></td>
			<td><?php echo $consignmentData['quantity']; ?></td>
			<td><?php echo $consignmentData['consignment_note']; ?></td>
			<td><?php echo $consignmentData['paper_date']; ?></td>
			<td><?php echo $consignmentData['date_of_shipment']; ?></td>
			<td><?php echo $consignmentData['serial_no']; ?></td>
			<td><?php echo $consignmentData['total']; ?></td>
			<td><?php echo $consignmentData['recipient']; ?></td>
			<td><?php echo $consignmentData['deliverer']; ?></td>
			<td><?php echo $consignmentData['entry_accept_control_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consignment_datas', 'action' => 'view', $consignmentData['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consignment_datas', 'action' => 'edit', $consignmentData['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consignment_datas', 'action' => 'delete', $consignmentData['id']), null, __('Are you sure you want to delete # %s?', $consignmentData['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consignment Data'), array('controller' => 'consignment_datas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
