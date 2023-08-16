<div class="payments view">
<h2><?php  echo __('Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Used Credit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['UsedCredit']['id'], array('controller' => 'used_credits', 'action' => 'view', $payment['UsedCredit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $payment['Invoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment'), array('action' => 'edit', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Used Credits'), array('controller' => 'used_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Used Credit'), array('controller' => 'used_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
