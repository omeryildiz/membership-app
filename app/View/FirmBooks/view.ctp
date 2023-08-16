<div class="firmBooks view">
<h2><?php  echo __('Firm Book'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($firmBook['FirmBook']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($firmBook['FirmBook']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($firmBook['FirmBook']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($firmBook['FirmBook']['tel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Firm Book'), array('action' => 'edit', $firmBook['FirmBook']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Firm Book'), array('action' => 'delete', $firmBook['FirmBook']['id']), null, __('Are you sure you want to delete # %s?', $firmBook['FirmBook']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Firm Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Offers'); ?></h3>
	<?php if (!empty($firmBook['Offer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firm Unit'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Firm Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($firmBook['Offer'] as $offer): ?>
		<tr>
			<td><?php echo $offer['id']; ?></td>
			<td><?php echo $offer['firm_unit']; ?></td>
			<td><?php echo $offer['no']; ?></td>
			<td><?php echo $offer['date']; ?></td>
			<td><?php echo $offer['cost']; ?></td>
			<td><?php echo $offer['details']; ?></td>
			<td><?php echo $offer['type']; ?></td>
			<td><?php echo $offer['status']; ?></td>
			<td><?php echo $offer['project_id']; ?></td>
			<td><?php echo $offer['firm_book_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'offers', 'action' => 'view', $offer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'offers', 'action' => 'edit', $offer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'offers', 'action' => 'delete', $offer['id']), null, __('Are you sure you want to delete # %s?', $offer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
