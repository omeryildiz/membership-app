<div class="cashes view">
<h2><?php  echo __('Cash'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Name'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['case_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Unit'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['currency_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Incoming'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['incoming']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outgoing'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['outgoing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Code'); ?></dt>
		<dd>
			<?php echo h($cash['Cash']['case_code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cash'), array('action' => 'edit', $cash['Cash']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cash'), array('action' => 'delete', $cash['Cash']['id']), null, __('Are you sure you want to delete # %s?', $cash['Cash']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bank Accounts'); ?></h3>
	<?php if (!empty($cash['BankAccount'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bank Account Number'); ?></th>
		<th><?php echo __('Iban'); ?></th>
		<th><?php echo __('Bank Name'); ?></th>
		<th><?php echo __('Account Name'); ?></th>
		<th><?php echo __('Account Type'); ?></th>
		<th><?php echo __('Currency Unit'); ?></th>
		<th><?php echo __('Branch Bank'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Balance Due'); ?></th>
		<th><?php echo __('Balance Receivable'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cash['BankAccount'] as $bankAccount): ?>
		<tr>
			<td><?php echo $bankAccount['id']; ?></td>
			<td><?php echo $bankAccount['bank_account_number']; ?></td>
			<td><?php echo $bankAccount['iban']; ?></td>
			<td><?php echo $bankAccount['bank_name']; ?></td>
			<td><?php echo $bankAccount['account_name']; ?></td>
			<td><?php echo $bankAccount['account_type']; ?></td>
			<td><?php echo $bankAccount['currency_unit']; ?></td>
			<td><?php echo $bankAccount['branch_bank']; ?></td>
			<td><?php echo $bankAccount['tel']; ?></td>
			<td><?php echo $bankAccount['description']; ?></td>
			<td><?php echo $bankAccount['address']; ?></td>
			<td><?php echo $bankAccount['balance_due']; ?></td>
			<td><?php echo $bankAccount['balance_receivable']; ?></td>
			<td><?php echo $bankAccount['fax']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bank_accounts', 'action' => 'view', $bankAccount['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bank_accounts', 'action' => 'edit', $bankAccount['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bank_accounts', 'action' => 'delete', $bankAccount['id']), null, __('Are you sure you want to delete # %s?', $bankAccount['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Currency Accounts'); ?></h3>
	<?php if (!empty($cash['CurrencyAccount'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Currency Account Code'); ?></th>
		<th><?php echo __('Currency Account Type'); ?></th>
		<th><?php echo __('Currency Account Unit'); ?></th>
		<th><?php echo __('Default Price'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Balance Due'); ?></th>
		<th><?php echo __('Remaining Receivable'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cash['CurrencyAccount'] as $currencyAccount): ?>
		<tr>
			<td><?php echo $currencyAccount['id']; ?></td>
			<td><?php echo $currencyAccount['currency_account_code']; ?></td>
			<td><?php echo $currencyAccount['currency_account_type']; ?></td>
			<td><?php echo $currencyAccount['currency_account_unit']; ?></td>
			<td><?php echo $currencyAccount['default_price']; ?></td>
			<td><?php echo $currencyAccount['title']; ?></td>
			<td><?php echo $currencyAccount['balance_due']; ?></td>
			<td><?php echo $currencyAccount['remaining_receivable']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccount['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'currency_accounts', 'action' => 'edit', $currencyAccount['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'currency_accounts', 'action' => 'delete', $currencyAccount['id']), null, __('Are you sure you want to delete # %s?', $currencyAccount['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
