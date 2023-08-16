<div class="guaranteeLetters view">
<h2><?php  echo __('Guarantee Letter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Letter Type'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['letter_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acceptor'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['acceptor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficiary'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['beneficiary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guarantor'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['guarantor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Counter Guarantee'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['counter_guarantee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starting Date'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['starting_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guaranteeLetter['BankAccount']['id'], array('controller' => 'bank_accounts', 'action' => 'view', $guaranteeLetter['BankAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission Rate'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['commission_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guaranteeLetter['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $guaranteeLetter['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration Date'); ?></dt>
		<dd>
			<?php echo h($guaranteeLetter['GuaranteeLetter']['expiration_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guarantee Letter'), array('action' => 'edit', $guaranteeLetter['GuaranteeLetter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guarantee Letter'), array('action' => 'delete', $guaranteeLetter['GuaranteeLetter']['id']), null, __('Are you sure you want to delete # %s?', $guaranteeLetter['GuaranteeLetter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guarantee Letters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guarantee Letter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accounts'), array('controller' => 'bank_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Account'), array('controller' => 'bank_accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
