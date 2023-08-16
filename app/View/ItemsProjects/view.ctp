<div class="itemsProjects view">
<h2><?php  echo __('Items Project'); ?></h2>
	<dl>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsProject['Item']['id'], array('controller' => 'items', 'action' => 'view', $itemsProject['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsProject['Project']['id'], array('controller' => 'projects', 'action' => 'view', $itemsProject['Project']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Project'), array('action' => 'edit', $itemsProject['ItemsProject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Items Project'), array('action' => 'delete', $itemsProject['ItemsProject']['id']), null, __('Are you sure you want to delete # %s?', $itemsProject['ItemsProject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
