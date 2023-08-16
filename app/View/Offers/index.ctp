<div class="offers index">
	<h2><?php echo __('Offers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firm_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('no'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('firm_book_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($offers as $offer): ?>
	<tr>
		<td><?php echo h($offer['Offer']['id']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['firm_unit']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['no']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['date']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['cost']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['details']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['type']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($offer['Project']['id'], array('controller' => 'projects', 'action' => 'view', $offer['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($offer['FirmBook']['name'], array('controller' => 'firm_books', 'action' => 'view', $offer['FirmBook']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $offer['Offer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $offer['Offer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $offer['Offer']['id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firm Books'), array('controller' => 'firm_books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm Book'), array('controller' => 'firm_books', 'action' => 'add')); ?> </li>
	</ul>
</div>
