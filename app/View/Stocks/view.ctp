<div class="stocks view">
<h2><?php echo __('Stock'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $stock['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock_symbol'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_symbol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock_name'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Units_purchased'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['units_purchased']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase_price'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['purchase_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date_purchased'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['date_purchased']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']), array(), __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
