<div class="relevants view">
<h2><?php  echo __('Relevant'); ?></h2>
	<dl>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo $this->Html->link($relevant['Stock']['id'], array('controller' => 'stocks', 'action' => 'view', $relevant['Stock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($relevant['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $relevant['Invoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Relevant'), array('action' => 'edit', $relevant['Relevant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Relevant'), array('action' => 'delete', $relevant['Relevant']['id']), null, __('Are you sure you want to delete # %s?', $relevant['Relevant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Relevants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relevant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
