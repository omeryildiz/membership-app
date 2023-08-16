<div class="paymentTypes view">
<h2><?php  echo __('Payment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Type'), array('action' => 'edit', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Type'), array('action' => 'delete', $paymentType['PaymentType']['id']), null, __('Are you sure you want to delete # %s?', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
