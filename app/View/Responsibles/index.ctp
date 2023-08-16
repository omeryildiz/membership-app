<div class="responsibles index">
	<h2><?php echo __('Responsibles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsible_name'); ?></th>
			<th><?php echo $this->Paginator->sort('responsible_surname'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($responsibles as $responsible): ?>
	<tr>
		<td><?php echo h($responsible['Responsible']['id']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['responsible_name']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['responsible_surname']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($responsible['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $responsible['CurrencyAccount']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $responsible['Responsible']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $responsible['Responsible']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $responsible['Responsible']['id']), null, __('Are you sure you want to delete # %s?', $responsible['Responsible']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Responsible'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
