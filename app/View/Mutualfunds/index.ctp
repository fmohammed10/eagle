<div class="mutualfunds index">
	<h2><?php echo __('Mutualfunds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ticker'); ?></th>
			<th><?php echo $this->Paginator->sort('fund_name'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('fund_family'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mutualfunds as $mutualfund): ?>
	<tr>
		<td><?php echo h($mutualfund['Mutualfund']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mutualfund['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $mutualfund['Customer']['id'])); ?>
		</td>
		<td><?php echo h($mutualfund['Mutualfund']['ticker']); ?>&nbsp;</td>
		<td><?php echo h($mutualfund['Mutualfund']['fund_name']); ?>&nbsp;</td>
		<td><?php echo h($mutualfund['Mutualfund']['category']); ?>&nbsp;</td>
		<td><?php echo h($mutualfund['Mutualfund']['fund_family']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mutualfund['Mutualfund']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mutualfund['Mutualfund']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mutualfund['Mutualfund']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mutualfund['Mutualfund']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Mutualfund'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
