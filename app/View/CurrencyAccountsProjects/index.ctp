<div class="currencyAccountsProjects index">
	<h2><?php echo __('Currency Accounts Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('currency_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($currencyAccountsProjects as $currencyAccountsProject): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($currencyAccountsProject['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountsProject['CurrencyAccount']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($currencyAccountsProject['Project']['id'], array('controller' => 'projects', 'action' => 'view', $currencyAccountsProject['Project']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $currencyAccountsProject['CurrencyAccountsProject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $currencyAccountsProject['CurrencyAccountsProject']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $currencyAccountsProject['CurrencyAccountsProject']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountsProject['CurrencyAccountsProject']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Currency Accounts Project'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
