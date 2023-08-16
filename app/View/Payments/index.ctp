<div class="payments index">
	<h2><?php echo __('Payments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('used_credit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($payments as $payment): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($payment['UsedCredit']['id'], array('controller' => 'used_credits', 'action' => 'view', $payment['UsedCredit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $payment['Invoice']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payment['Payment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Used Credits'), array('controller' => 'used_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Used Credit'), array('controller' => 'used_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
