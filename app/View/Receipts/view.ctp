<div class="receipts view">
<h2><?php  echo __('Receipt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial No'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['serial_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process No'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['process_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voucher'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['voucher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account Unit'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['currency_account_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Accurency Unit'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['process_accurency_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receipt['CurrencyAccount']['title'], array('controller' => 'currency_accounts', 'action' => 'view', $receipt['CurrencyAccount']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receipt'), array('action' => 'edit', $receipt['Receipt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receipt'), array('action' => 'delete', $receipt['Receipt']['id']), null, __('Are you sure you want to delete # %s?', $receipt['Receipt']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currency Accounts'), array('controller' => 'currency_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency Account'), array('controller' => 'currency_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
