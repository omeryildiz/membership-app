<div class="creditLimits view">
<h2><?php  echo __('Credit Limit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Limit'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['credit_limit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash Blockage'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['cash_blockage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estate Mortgage'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['estate_mortgage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Against Signature'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['against_signature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($creditLimit['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $creditLimit['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credit Limit'), array('action' => 'edit', $creditLimit['CreditLimit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credit Limit'), array('action' => 'delete', $creditLimit['CreditLimit']['id']), null, __('Are you sure you want to delete # %s?', $creditLimit['CreditLimit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
