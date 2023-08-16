<div class="currencyAccountsProjects view">
<h2><?php  echo __('Currency Accounts Project'); ?></h2>
	<dl>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountsProject['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountsProject['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountsProject['Project']['id'], array('controller' => 'projects', 'action' => 'view', $currencyAccountsProject['Project']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency Accounts Project'), array('action' => 'edit', $currencyAccountsProject['CurrencyAccountsProject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency Accounts Project'), array('action' => 'delete', $currencyAccountsProject['CurrencyAccountsProject']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountsProject['CurrencyAccountsProject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Accounts Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
