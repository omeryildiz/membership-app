<div class="bankAccountables view">
<h2><?php  echo __('Bank Accountable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bankAccountable['BankAccountable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bankAccountable['BankAccountable']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($bankAccountable['BankAccountable']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($bankAccountable['BankAccountable']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bankAccountable['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $bankAccountable['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bank Accountable'), array('action' => 'edit', $bankAccountable['BankAccountable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bank Accountable'), array('action' => 'delete', $bankAccountable['BankAccountable']['id']), null, __('Are you sure you want to delete # %s?', $bankAccountable['BankAccountable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accountables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Accountable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
