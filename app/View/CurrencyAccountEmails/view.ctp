<div class="currencyAccountEmails view">
<h2><?php  echo __('Currency Account Email'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($currencyAccountEmail['CurrencyAccountEmail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($currencyAccountEmail['CurrencyAccountEmail']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountEmail['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountEmail['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency Account Email'), array('action' => 'edit', $currencyAccountEmail['CurrencyAccountEmail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency Account Email'), array('action' => 'delete', $currencyAccountEmail['CurrencyAccountEmail']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountEmail['CurrencyAccountEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Emails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Email'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
