<div class="collaterals view">
<h2><?php  echo __('Collateral'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($collateral['Collateral']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Collateral Type'); ?></dt>
		<dd>
			<?php echo h($collateral['Collateral']['collateral_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking Number'); ?></dt>
		<dd>
			<?php echo h($collateral['Collateral']['tracking_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Collateral Number'); ?></dt>
		<dd>
			<?php echo h($collateral['Collateral']['collateral_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cheque'); ?></dt>
		<dd>
			<?php echo h($collateral['Collateral']['cheque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warrant'); ?></dt>
		<dd>
			<?php echo h($collateral['Collateral']['warrant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collateral['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $collateral['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collateral['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $collateral['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Collateral'), array('action' => 'edit', $collateral['Collateral']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Collateral'), array('action' => 'delete', $collateral['Collateral']['id']), null, __('Are you sure you want to delete # %s?', $collateral['Collateral']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collateral'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
