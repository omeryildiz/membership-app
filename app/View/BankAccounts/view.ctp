<div class="bankAccounts view">
<h2><?php  echo __('Bank Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Account Number'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['bank_account_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iban'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['iban']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Name'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['bank_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Name'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['account_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['account_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Unit'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['currency_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Bank'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['branch_bank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance Due'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['balance_due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance Receivable'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['balance_receivable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($bankAccount['BankAccount']['fax']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bank Account'), array('action' => 'edit', $bankAccount['BankAccount']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bank Account'), array('action' => 'delete', $bankAccount['BankAccount']['id']), null, __('Are you sure you want to delete # %s?', $bankAccount['BankAccount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accountables'), array('controller' => 'bank_accountables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Accountable'), array('controller' => 'bank_accountables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('controller' => 'collaterals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collateral'), array('controller' => 'collaterals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('controller' => 'credit_limits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('controller' => 'credit_limits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts Cashes'), array('controller' => 'currency_accounts_cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Accounts Cash'), array('controller' => 'currency_accounts_cashes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('controller' => 'guarantee_letters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('controller' => 'guarantee_letters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Used Credits'), array('controller' => 'used_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Used Credit'), array('controller' => 'used_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bank Accountables'); ?></h3>
	<?php if (!empty($bankAccount['BankAccountable'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Bank Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['BankAccountable'] as $bankAccountable): ?>
		<tr>
			<td><?php echo $bankAccountable['id']; ?></td>
			<td><?php echo $bankAccountable['name']; ?></td>
			<td><?php echo $bankAccountable['surname']; ?></td>
			<td><?php echo $bankAccountable['tel']; ?></td>
			<td><?php echo $bankAccountable['bank_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bank_accountables', 'action' => 'view', $bankAccountable['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bank_accountables', 'action' => 'edit', $bankAccountable['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bank_accountables', 'action' => 'delete', $bankAccountable['id']), null, __('Are you sure you want to delete # %s?', $bankAccountable['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bank Accountable'), array('controller' => 'bank_accountables', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Collaterals'); ?></h3>
	<?php if (!empty($bankAccount['Collateral'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Collateral Type'); ?></th>
		<th><?php echo __('Tracking Number'); ?></th>
		<th><?php echo __('Collateral Number'); ?></th>
		<th><?php echo __('Cheque'); ?></th>
		<th><?php echo __('Warrant'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('Bank Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['Collateral'] as $collateral): ?>
		<tr>
			<td><?php echo $collateral['id']; ?></td>
			<td><?php echo $collateral['collateral_type']; ?></td>
			<td><?php echo $collateral['tracking_number']; ?></td>
			<td><?php echo $collateral['collateral_number']; ?></td>
			<td><?php echo $collateral['cheque']; ?></td>
			<td><?php echo $collateral['warrant']; ?></td>
			<td><?php echo $collateral['currency_account_id']; ?></td>
			<td><?php echo $collateral['bank_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'collaterals', 'action' => 'view', $collateral['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'collaterals', 'action' => 'edit', $collateral['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'collaterals', 'action' => 'delete', $collateral['id']), null, __('Are you sure you want to delete # %s?', $collateral['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Collateral'), array('controller' => 'collaterals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Credit Limits'); ?></h3>
	<?php if (!empty($bankAccount['CreditLimit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Credit Limit'); ?></th>
		<th><?php echo __('Cash Blockage'); ?></th>
		<th><?php echo __('Estate Mortgage'); ?></th>
		<th><?php echo __('Against Signature'); ?></th>
		<th><?php echo __('Bank Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['CreditLimit'] as $creditLimit): ?>
		<tr>
			<td><?php echo $creditLimit['id']; ?></td>
			<td><?php echo $creditLimit['credit_limit']; ?></td>
			<td><?php echo $creditLimit['cash_blockage']; ?></td>
			<td><?php echo $creditLimit['estate_mortgage']; ?></td>
			<td><?php echo $creditLimit['against_signature']; ?></td>
			<td><?php echo $creditLimit['bank_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'credit_limits', 'action' => 'view', $creditLimit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'credit_limits', 'action' => 'edit', $creditLimit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'credit_limits', 'action' => 'delete', $creditLimit['id']), null, __('Are you sure you want to delete # %s?', $creditLimit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Credit Limit'), array('controller' => 'credit_limits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Currency Accounts Cashes'); ?></h3>
	<?php if (!empty($bankAccount['CurrencyAccountsCash'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Bank Account Id'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('Cash Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['CurrencyAccountsCash'] as $currencyAccountsCash): ?>
		<tr>
			<td><?php echo $currencyAccountsCash['bank_account_id']; ?></td>
			<td><?php echo $currencyAccountsCash['currency_account_id']; ?></td>
			<td><?php echo $currencyAccountsCash['cash_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'currency_accounts_cashes', 'action' => 'view', $currencyAccountsCash['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'currency_accounts_cashes', 'action' => 'edit', $currencyAccountsCash['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'currency_accounts_cashes', 'action' => 'delete', $currencyAccountsCash['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountsCash['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Currency Accounts Cash'), array('controller' => 'currency_accounts_cashes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Guarantee Letters'); ?></h3>
	<?php if (!empty($bankAccount['GuaranteeLetter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Letter Type'); ?></th>
		<th><?php echo __('Acceptor'); ?></th>
		<th><?php echo __('Beneficiary'); ?></th>
		<th><?php echo __('Guarantor'); ?></th>
		<th><?php echo __('Counter Guarantee'); ?></th>
		<th><?php echo __('Starting Date'); ?></th>
		<th><?php echo __('Bank Account Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Commission Rate'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('Expiration Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['GuaranteeLetter'] as $guaranteeLetter): ?>
		<tr>
			<td><?php echo $guaranteeLetter['id']; ?></td>
			<td><?php echo $guaranteeLetter['letter_type']; ?></td>
			<td><?php echo $guaranteeLetter['acceptor']; ?></td>
			<td><?php echo $guaranteeLetter['beneficiary']; ?></td>
			<td><?php echo $guaranteeLetter['guarantor']; ?></td>
			<td><?php echo $guaranteeLetter['counter_guarantee']; ?></td>
			<td><?php echo $guaranteeLetter['starting_date']; ?></td>
			<td><?php echo $guaranteeLetter['bank_account_id']; ?></td>
			<td><?php echo $guaranteeLetter['amount']; ?></td>
			<td><?php echo $guaranteeLetter['commission_rate']; ?></td>
			<td><?php echo $guaranteeLetter['currency_account_id']; ?></td>
			<td><?php echo $guaranteeLetter['expiration_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'guarantee_letters', 'action' => 'view', $guaranteeLetter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'guarantee_letters', 'action' => 'edit', $guaranteeLetter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'guarantee_letters', 'action' => 'delete', $guaranteeLetter['id']), null, __('Are you sure you want to delete # %s?', $guaranteeLetter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('controller' => 'guarantee_letters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Used Credits'); ?></h3>
	<?php if (!empty($bankAccount['UsedCredit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Credit Amount'); ?></th>
		<th><?php echo __('Credit Debt'); ?></th>
		<th><?php echo __('Credit Payment Date'); ?></th>
		<th><?php echo __('Min Payment Amount'); ?></th>
		<th><?php echo __('File Expenses'); ?></th>
		<th><?php echo __('Commission Fee'); ?></th>
		<th><?php echo __('Bank Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['UsedCredit'] as $usedCredit): ?>
		<tr>
			<td><?php echo $usedCredit['id']; ?></td>
			<td><?php echo $usedCredit['credit_amount']; ?></td>
			<td><?php echo $usedCredit['credit_debt']; ?></td>
			<td><?php echo $usedCredit['credit_payment_date']; ?></td>
			<td><?php echo $usedCredit['min_payment_amount']; ?></td>
			<td><?php echo $usedCredit['file_expenses']; ?></td>
			<td><?php echo $usedCredit['commission_fee']; ?></td>
			<td><?php echo $usedCredit['bank_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'used_credits', 'action' => 'view', $usedCredit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'used_credits', 'action' => 'edit', $usedCredit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'used_credits', 'action' => 'delete', $usedCredit['id']), null, __('Are you sure you want to delete # %s?', $usedCredit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Used Credit'), array('controller' => 'used_credits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cashes'); ?></h3>
	<?php if (!empty($bankAccount['Cash'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Case Name'); ?></th>
		<th><?php echo __('Currency Unit'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Incoming'); ?></th>
		<th><?php echo __('Outgoing'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('Case Code'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bankAccount['Cash'] as $cash): ?>
		<tr>
			<td><?php echo $cash['id']; ?></td>
			<td><?php echo $cash['case_name']; ?></td>
			<td><?php echo $cash['currency_unit']; ?></td>
			<td><?php echo $cash['description']; ?></td>
			<td><?php echo $cash['incoming']; ?></td>
			<td><?php echo $cash['outgoing']; ?></td>
			<td><?php echo $cash['balance']; ?></td>
			<td><?php echo $cash['case_code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cashes', 'action' => 'view', $cash['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cashes', 'action' => 'edit', $cash['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cashes', 'action' => 'delete', $cash['id']), null, __('Are you sure you want to delete # %s?', $cash['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
