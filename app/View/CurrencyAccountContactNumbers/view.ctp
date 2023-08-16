<div class="currencyAccountContactNumbers view">
<h2><?php  echo __('Currency Account Contact Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Type'); ?></dt>
		<dd>
			<?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['contact_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($currencyAccountContactNumber['CurrencyAccountContactNumber']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountContactNumber['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountContactNumber['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency Account Contact Number'), array('action' => 'edit', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency Account Contact Number'), array('action' => 'delete', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountContactNumber['CurrencyAccountContactNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Contact Numbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Contact Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
