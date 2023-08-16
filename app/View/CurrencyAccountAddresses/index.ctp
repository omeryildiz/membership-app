<div class="currencyAccountAddresses index">
	<h2><?php echo __('Currency Account Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_type'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('post_number'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($currencyAccountAddresses as $currencyAccountAddress): ?>
	<tr>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['id']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['address_type']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['address']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['country']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['district']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['post_number']); ?>&nbsp;</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($currencyAccountAddress['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountAddress['CurrencyAccount']['id'])); ?>
		</td>
		<td><?php echo h($currencyAccountAddress['CurrencyAccountAddress']['city']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $currencyAccountAddress['CurrencyAccountAddress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $currencyAccountAddress['CurrencyAccountAddress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $currencyAccountAddress['CurrencyAccountAddress']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountAddress['CurrencyAccountAddress']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Currency Account Address'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
