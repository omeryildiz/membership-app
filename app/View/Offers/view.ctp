<div class="offers view">
<h2><?php  echo __('Offer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firm Unit'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['firm_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($offer['Project']['id'], array('controller' => 'projects', 'action' => 'view', $offer['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firm Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($offer['FirmBook']['name'], array('controller' => 'firm_books', 'action' => 'view', $offer['FirmBook']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Offer'), array('action' => 'edit', $offer['Offer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Offer'), array('action' => 'delete', $offer['Offer']['id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firm Books'), array('controller' => 'firm_books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm Book'), array('controller' => 'firm_books', 'action' => 'add')); ?> </li>
	</ul>
</div>
