<div class="currencyAccountAddresses view">
<h2><?php  echo __('Currency Account Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Type'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['address_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Number'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['post_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currencyAccountAddress['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $currencyAccountAddress['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($currencyAccountAddress['CurrencyAccountAddress']['city']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency Account Address'), array('action' => 'edit', $currencyAccountAddress['CurrencyAccountAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency Account Address'), array('action' => 'delete', $currencyAccountAddress['CurrencyAccountAddress']['id']), null, __('Are you sure you want to delete # %s?', $currencyAccountAddress['CurrencyAccountAddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Account Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
