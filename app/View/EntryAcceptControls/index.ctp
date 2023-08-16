<div class="entryAcceptControls index">
	<h2><?php echo __('Entry Accept Controls'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('acceptance_date'); ?></th>
			<th><?php echo $this->Paginator->sort('recipient'); ?></th>
			<th><?php echo $this->Paginator->sort('physical_compliance'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('surname'); ?></th>
			<th><?php echo $this->Paginator->sort('technical_compliance'); ?></th>
			<th><?php echo $this->Paginator->sort('projects_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($entryAcceptControls as $entryAcceptControl): ?>
	<tr>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['id']); ?>&nbsp;</td>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['acceptance_date']); ?>&nbsp;</td>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['recipient']); ?>&nbsp;</td>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['physical_compliance']); ?>&nbsp;</td>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['name']); ?>&nbsp;</td>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['surname']); ?>&nbsp;</td>
		<td><?php echo h($entryAcceptControl['EntryAcceptControl']['technical_compliance']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entryAcceptControl['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $entryAcceptControl['Projects']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entryAcceptControl['EntryAcceptControl']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entryAcceptControl['EntryAcceptControl']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entryAcceptControl['EntryAcceptControl']['id']), null, __('Are you sure you want to delete # %s?', $entryAcceptControl['EntryAcceptControl']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entry Accept Control'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consignment Datas'), array('controller' => 'consignment_datas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consignment Data'), array('controller' => 'consignment_datas', 'action' => 'add')); ?> </li>
	</ul>
</div>
