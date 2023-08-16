<div class="currencyAccountsCashes view">
<h2><?php  echo __('Currency Accounts Cash'); ?></h2>
	<dl>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountsCash['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $currencyAccountsCash['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountsCash['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountsCash['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountsCash['Cash']['id'], array('controller' => 'cashes', 'action' => 'view', $currencyAccountsCash['Cash']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency Accounts Cash'), array('action' => 'edit', $currencyAccountsCash['CurrencyAccountsCash']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency Accounts Cash'), array('action' => 'delete', $currencyAccountsCash['CurrencyAccountsCash']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountsCash['CurrencyAccountsCash']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts Cashes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Accounts Cash'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
