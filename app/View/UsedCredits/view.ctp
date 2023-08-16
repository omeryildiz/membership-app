<div class="usedCredits view">
<h2><?php  echo __('Used Credit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Amount'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['credit_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Debt'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['credit_debt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Payment Date'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['credit_payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Payment Amount'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['min_payment_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Expenses'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['file_expenses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission Fee'); ?></dt>
		<dd>
			<?php echo h($usedCredit['UsedCredit']['commission_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usedCredit['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $usedCredit['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Used Credit'), array('action' => 'edit', $usedCredit['UsedCredit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Used Credit'), array('action' => 'delete', $usedCredit['UsedCredit']['id']), null, __('Are you sure you want to delete # %s?', $usedCredit['UsedCredit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Used Credits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Used Credit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($usedCredit['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Used Credit Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usedCredit['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['used_credit_id']; ?></td>
			<td><?php echo $payment['invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
