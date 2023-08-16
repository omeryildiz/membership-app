<div class="responsibles view">
<h2><?php  echo __('Responsible'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsible Name'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['responsible_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsible Surname'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['responsible_surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($responsible['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $responsible['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Responsible'), array('action' => 'edit', $responsible['Responsible']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Responsible'), array('action' => 'delete', $responsible['Responsible']['id']), null, __('Are you sure you want to delete # %s?', $responsible['Responsible']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsibles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsible'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
