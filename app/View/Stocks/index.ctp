<div class="stocks index">
	<h2><?php echo __('Stocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_symbol'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_name'); ?></th>
			<th><?php echo $this->Paginator->sort('units_purchased'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_price'); ?></th>
			<th><?php echo $this->Paginator->sort('date_purchased'); ?></th>
			<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($stocks as $stock): ?>
	<tr>
		<td><?php echo h($stock['Stock']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $stock['Customer']['id'])); ?>
		</td>
		<td><?php echo h($stock['Stock']['stock_symbol']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_name']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['units_purchased']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['purchase_price']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['date_purchased']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stock['Stock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stock['Stock']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stock['Stock']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $stock['Stock']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
