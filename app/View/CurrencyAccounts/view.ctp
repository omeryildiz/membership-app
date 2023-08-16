<div class="currencyAccounts view">
<h2><?php  echo __('Currency Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account Code'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['currency_account_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account Type'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['currency_account_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account Unit'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['currency_account_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Price'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['default_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance Due'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['balance_due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remaining Receivable'); ?></dt>
		<dd>
			<?php echo h($currencyAccount['CurrencyAccount']['remaining_receivable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency Account'), array('action' => 'edit', $currencyAccount['CurrencyAccount']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency Account'), array('action' => 'delete', $currencyAccount['CurrencyAccount']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccount['CurrencyAccount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collaterals'), array('controller' => 'collaterals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collateral'), array('controller' => 'collaterals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Addresses'), array('controller' => 'currency_account_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Address'), array('controller' => 'currency_account_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Contact Numbers'), array('controller' => 'currency_account_contact_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Contact Number'), array('controller' => 'currency_account_contact_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Emails'), array('controller' => 'currency_account_emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Email'), array('controller' => 'currency_account_emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('controller' => 'guarantee_letters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('controller' => 'guarantee_letters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsibles'), array('controller' => 'responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsible'), array('controller' => 'responsibles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Collaterals'); ?></h3>
	<?php if (!empty($currencyAccount['Collateral'])): ?>
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
		foreach ($currencyAccount['Collateral'] as $collateral): ?>
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
	<h3><?php echo __('Related Currency Account Addresses'); ?></h3>
	<?php if (!empty($currencyAccount['CurrencyAccountAddress'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Address Type'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('District'); ?></th>
		<th><?php echo __('Post Number'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['CurrencyAccountAddress'] as $currencyAccountAddress): ?>
		<tr>
			<td><?php echo $currencyAccountAddress['id']; ?></td>
			<td><?php echo $currencyAccountAddress['address_type']; ?></td>
			<td><?php echo $currencyAccountAddress['address']; ?></td>
			<td><?php echo $currencyAccountAddress['country']; ?></td>
			<td><?php echo $currencyAccountAddress['district']; ?></td>
			<td><?php echo $currencyAccountAddress['post_number']; ?></td>
			<td><?php echo $currencyAccountAddress['description']; ?></td>
			<td><?php echo $currencyAccountAddress['currency_account_id']; ?></td>
			<td><?php echo $currencyAccountAddress['city']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'currency_account_addresses', 'action' => 'view', $currencyAccountAddress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'currency_account_addresses', 'action' => 'edit', $currencyAccountAddress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'currency_account_addresses', 'action' => 'delete', $currencyAccountAddress['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountAddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Currency Account Address'), array('controller' => 'currency_account_addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Currency Account Contact Numbers'); ?></h3>
	<?php if (!empty($currencyAccount['CurrencyAccountContactNumber'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Type'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['CurrencyAccountContactNumber'] as $currencyAccountContactNumber): ?>
		<tr>
			<td><?php echo $currencyAccountContactNumber['id']; ?></td>
			<td><?php echo $currencyAccountContactNumber['contact_type']; ?></td>
			<td><?php echo $currencyAccountContactNumber['number']; ?></td>
			<td><?php echo $currencyAccountContactNumber['fax']; ?></td>
			<td><?php echo $currencyAccountContactNumber['currency_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'currency_account_contact_numbers', 'action' => 'view', $currencyAccountContactNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'currency_account_contact_numbers', 'action' => 'edit', $currencyAccountContactNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'currency_account_contact_numbers', 'action' => 'delete', $currencyAccountContactNumber['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountContactNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Currency Account Contact Number'), array('controller' => 'currency_account_contact_numbers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Currency Account Emails'); ?></h3>
	<?php if (!empty($currencyAccount['CurrencyAccountEmail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['CurrencyAccountEmail'] as $currencyAccountEmail): ?>
		<tr>
			<td><?php echo $currencyAccountEmail['id']; ?></td>
			<td><?php echo $currencyAccountEmail['email']; ?></td>
			<td><?php echo $currencyAccountEmail['currency_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'currency_account_emails', 'action' => 'view', $currencyAccountEmail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'currency_account_emails', 'action' => 'edit', $currencyAccountEmail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'currency_account_emails', 'action' => 'delete', $currencyAccountEmail['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountEmail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Currency Account Email'), array('controller' => 'currency_account_emails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Guarantee Letters'); ?></h3>
	<?php if (!empty($currencyAccount['GuaranteeLetter'])): ?>
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
		foreach ($currencyAccount['GuaranteeLetter'] as $guaranteeLetter): ?>
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
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($currencyAccount['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice Serial No'); ?></th>
		<th><?php echo __('Invoice Date'); ?></th>
		<th><?php echo __('Document No'); ?></th>
		<th><?php echo __('Process Accurency Unit'); ?></th>
		<th><?php echo __('Currency Account Unit'); ?></th>
		<th><?php echo __('Money Unit'); ?></th>
		<th><?php echo __('Kdv'); ?></th>
		<th><?php echo __('Process Type'); ?></th>
		<th><?php echo __('Invoice Payment'); ?></th>
		<th><?php echo __('Net Debt'); ?></th>
		<th><?php echo __('Net Credit'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th><?php echo __('Closing Invoices'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('File Path'); ?></th>
		<th><?php echo __('Consignment Data Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['invoice_serial_no']; ?></td>
			<td><?php echo $invoice['invoice_date']; ?></td>
			<td><?php echo $invoice['document_no']; ?></td>
			<td><?php echo $invoice['process_accurency_unit']; ?></td>
			<td><?php echo $invoice['currency_account_unit']; ?></td>
			<td><?php echo $invoice['money_unit']; ?></td>
			<td><?php echo $invoice['kdv']; ?></td>
			<td><?php echo $invoice['process_type']; ?></td>
			<td><?php echo $invoice['invoice_payment']; ?></td>
			<td><?php echo $invoice['net_debt']; ?></td>
			<td><?php echo $invoice['net_credit']; ?></td>
			<td><?php echo $invoice['due_date']; ?></td>
			<td><?php echo $invoice['closing_invoices']; ?></td>
			<td><?php echo $invoice['discount']; ?></td>
			<td><?php echo $invoice['currency_account_id']; ?></td>
			<td><?php echo $invoice['file_path']; ?></td>
			<td><?php echo $invoice['consignment_data_id']; ?></td>
			<td><?php echo $invoice['order_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($currencyAccount['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order No'); ?></th>
		<th><?php echo __('Order Date'); ?></th>
		<th><?php echo __('Document No'); ?></th>
		<th><?php echo __('Process Accurency Unit'); ?></th>
		<th><?php echo __('Currency Account Unit'); ?></th>
		<th><?php echo __('Money Unit'); ?></th>
		<th><?php echo __('Kdv'); ?></th>
		<th><?php echo __('Shipment Date'); ?></th>
		<th><?php echo __('Order Type'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th><?php echo __('Order Approval'); ?></th>
		<th><?php echo __('Paper Date'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['order_no']; ?></td>
			<td><?php echo $order['order_date']; ?></td>
			<td><?php echo $order['document_no']; ?></td>
			<td><?php echo $order['process_accurency_unit']; ?></td>
			<td><?php echo $order['currency_account_unit']; ?></td>
			<td><?php echo $order['money_unit']; ?></td>
			<td><?php echo $order['kdv']; ?></td>
			<td><?php echo $order['shipment_date']; ?></td>
			<td><?php echo $order['order_type']; ?></td>
			<td><?php echo $order['currency_account_id']; ?></td>
			<td><?php echo $order['order_approval']; ?></td>
			<td><?php echo $order['paper_date']; ?></td>
			<td><?php echo $order['due_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Receipts'); ?></h3>
	<?php if (!empty($currencyAccount['Receipt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Serial No'); ?></th>
		<th><?php echo __('Process No'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Voucher'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Currency Account Unit'); ?></th>
		<th><?php echo __('Process Accurency Unit'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['Receipt'] as $receipt): ?>
		<tr>
			<td><?php echo $receipt['id']; ?></td>
			<td><?php echo $receipt['serial_no']; ?></td>
			<td><?php echo $receipt['process_no']; ?></td>
			<td><?php echo $receipt['due_date']; ?></td>
			<td><?php echo $receipt['date']; ?></td>
			<td><?php echo $receipt['voucher']; ?></td>
			<td><?php echo $receipt['description']; ?></td>
			<td><?php echo $receipt['amount']; ?></td>
			<td><?php echo $receipt['currency_account_unit']; ?></td>
			<td><?php echo $receipt['process_accurency_unit']; ?></td>
			<td><?php echo $receipt['currency_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'receipts', 'action' => 'view', $receipt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'receipts', 'action' => 'edit', $receipt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'receipts', 'action' => 'delete', $receipt['id']), null, __('Are you sure you want to delete # %s?', $receipt['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Responsibles'); ?></h3>
	<?php if (!empty($currencyAccount['Responsible'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Responsible Name'); ?></th>
		<th><?php echo __('Responsible Surname'); ?></th>
		<th><?php echo __('Currency Account Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['Responsible'] as $responsible): ?>
		<tr>
			<td><?php echo $responsible['id']; ?></td>
			<td><?php echo $responsible['responsible_name']; ?></td>
			<td><?php echo $responsible['responsible_surname']; ?></td>
			<td><?php echo $responsible['currency_account_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'responsibles', 'action' => 'view', $responsible['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'responsibles', 'action' => 'edit', $responsible['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'responsibles', 'action' => 'delete', $responsible['id']), null, __('Are you sure you want to delete # %s?', $responsible['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Responsible'), array('controller' => 'responsibles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cashes'); ?></h3>
	<?php if (!empty($currencyAccount['Cash'])): ?>
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
		foreach ($currencyAccount['Cash'] as $cash): ?>
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
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($currencyAccount['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Name'); ?></th>
		<th><?php echo __('Agreement Starting Date'); ?></th>
		<th><?php echo __('Agreement Expiration Date'); ?></th>
		<th><?php echo __('Agreement Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currencyAccount['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['project_name']; ?></td>
			<td><?php echo $project['agreement_starting_date']; ?></td>
			<td><?php echo $project['agreement_expiration_date']; ?></td>
			<td><?php echo $project['agreement_amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
