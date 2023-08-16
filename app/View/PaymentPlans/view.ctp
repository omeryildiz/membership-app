<div class="paymentPlans view">
<h2><?php  echo __('Payment Plan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentPlan['PaymentPlan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($paymentPlan['PaymentPlan']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($paymentPlan['PaymentPlan']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($paymentPlan['PaymentPlan']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentPlan['Project']['id'], array('controller' => 'projects', 'action' => 'view', $paymentPlan['Project']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Plan'), array('action' => 'edit', $paymentPlan['PaymentPlan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Plan'), array('action' => 'delete', $paymentPlan['PaymentPlan']['id']), null, __('Are you sure you want to delete # %s?', $paymentPlan['PaymentPlan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Plan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
