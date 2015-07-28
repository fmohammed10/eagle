<div class="investments index">
	<h2><?php echo __('Investments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('acquired_value'); ?></th>
			<th><?php echo $this->Paginator->sort('acquired_date'); ?></th>
			<th><?php echo $this->Paginator->sort('recent_value'); ?></th>
			<th><?php echo $this->Paginator->sort('recent_date'); ?></th>
			<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($investments as $investment): ?>
	<tr>
		<td><?php echo h($investment['Investment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($investment['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $investment['Customer']['id'])); ?>
		</td>
		<td><?php echo h($investment['Investment']['category']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['description']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['acquired_value']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['acquired_date']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['recent_value']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['recent_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $investment['Investment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $investment['Investment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $investment['Investment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $investment['Investment']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Investment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
