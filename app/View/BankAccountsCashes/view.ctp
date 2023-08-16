<div class="bankAccountsCashes view">
<h2><?php  echo __('Bank Accounts Cash'); ?></h2>
	<dl>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bankAccountsCash['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $bankAccountsCash['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bankAccountsCash['Cash']['id'], array('controller' => 'cashes', 'action' => 'view', $bankAccountsCash['Cash']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bank Accounts Cash'), array('action' => 'edit', $bankAccountsCash['BankAccountsCash']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bank Accounts Cash'), array('action' => 'delete', $bankAccountsCash['BankAccountsCash']['id']), null, __('Are you sure you want to delete # %s?', $bankAccountsCash['BankAccountsCash']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts Cashes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Accounts Cash'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashes'), array('controller' => 'cashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash'), array('controller' => 'cashes', 'action' => 'add')); ?> </li>
	</ul>
</div>
