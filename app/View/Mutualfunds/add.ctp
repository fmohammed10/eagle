<div class="mutualfunds form">
<?php echo $this->Form->create('Mutualfund'); ?>
	<fieldset>
		<legend><?php echo __('Add Mutualfund'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('ticker');
		echo $this->Form->input('fund_name');
		echo $this->Form->input('category');
		echo $this->Form->input('fund_family');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mutualfunds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
