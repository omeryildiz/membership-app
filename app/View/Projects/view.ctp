<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agreement Starting Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['agreement_starting_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agreement Expiration Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['agreement_expiration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agreement Amount'); ?></dt>
		<dd>
			<?php echo h($project['Project']['agreement_amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Plans'), array('controller' => 'payment_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Plan'), array('controller' => 'payment_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Offers'); ?></h3>
	<?php if (!empty($project['Offer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firm Unit'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Firm Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Offer'] as $offer): ?>
		<tr>
			<td><?php echo $offer['id']; ?></td>
			<td><?php echo $offer['firm_unit']; ?></td>
			<td><?php echo $offer['no']; ?></td>
			<td><?php echo $offer['date']; ?></td>
			<td><?php echo $offer['cost']; ?></td>
			<td><?php echo $offer['details']; ?></td>
			<td><?php echo $offer['type']; ?></td>
			<td><?php echo $offer['status']; ?></td>
			<td><?php echo $offer['project_id']; ?></td>
			<td><?php echo $offer['firm_book_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'offers', 'action' => 'view', $offer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'offers', 'action' => 'edit', $offer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'offers', 'action' => 'delete', $offer['id']), null, __('Are you sure you want to delete # %s?', $offer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payment Plans'); ?></h3>
	<?php if (!empty($project['PaymentPlan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Unit'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['PaymentPlan'] as $paymentPlan): ?>
		<tr>
			<td><?php echo $paymentPlan['id']; ?></td>
			<td><?php echo $paymentPlan['date']; ?></td>
			<td><?php echo $paymentPlan['type']; ?></td>
			<td><?php echo $paymentPlan['unit']; ?></td>
			<td><?php echo $paymentPlan['project_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payment_plans', 'action' => 'view', $paymentPlan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payment_plans', 'action' => 'edit', $paymentPlan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payment_plans', 'action' => 'delete', $paymentPlan['id']), null, __('Are you sure you want to delete # %s?', $paymentPlan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Plan'), array('controller' => 'payment_plans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Currency Accounts'); ?></h3>
	<?php if (!empty($project['CurrencyAccount'])): ?>
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
		foreach ($project['CurrencyAccount'] as $currencyAccount): ?>
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
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($project['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Or Material Code'); ?></th>
		<th><?php echo __('Service Or Material Kind'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th><?php echo __('Unit'); ?></th>
		<th><?php echo __('Pcs'); ?></th>
		<th><?php echo __('Unit Price'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['service_or_material_code']; ?></td>
			<td><?php echo $item['service_or_material_kind']; ?></td>
			<td><?php echo $item['discount']; ?></td>
			<td><?php echo $item['unit']; ?></td>
			<td><?php echo $item['pcs']; ?></td>
			<td><?php echo $item['unit_price']; ?></td>
			<td><?php echo $item['total']; ?></td>
			<td><?php echo $item['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
