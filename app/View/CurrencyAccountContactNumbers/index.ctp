<div class="currencyAccountContactNumbers index">
	<h2><?php echo __('Currency Account Contact Numbers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_type'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($currencyAccountContactNumbers as $currencyAccountContactNumber): ?>
	<tr>
		<td><?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['id']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['contact_type']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['number']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($currencyAccountContactNumber['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountContactNumber['CurrencyAccount']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Currency Account Contact Number'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
