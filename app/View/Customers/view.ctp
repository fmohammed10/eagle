<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-mail'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cell_phone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mutualfunds'), array('controller' => 'mutualfunds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mutualfund'), array('controller' => 'mutualfunds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Investments'); ?></h3>
	<?php if (!empty($customer['Investment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Acquired Value'); ?></th>
		<th><?php echo __('Acquired Date'); ?></th>
		<th><?php echo __('Recent Value'); ?></th>
		<th><?php echo __('Recent Date'); ?></th>
		<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Investment'] as $investment): ?>
		<tr>
			<td><?php echo $investment['id']; ?></td>
			<td><?php echo $investment['customer_id']; ?></td>
			<td><?php echo $investment['category']; ?></td>
			<td><?php echo $investment['description']; ?></td>
			<td><?php echo $investment['acquired_value']; ?></td>
			<td><?php echo $investment['acquired_date']; ?></td>
			<td><?php echo $investment['recent_value']; ?></td>
			<td><?php echo $investment['recent_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'investments', 'action' => 'view', $investment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'investments', 'action' => 'edit', $investment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'investments', 'action' => 'delete', $investment['id']), array(), __('Are you sure you want to delete # %s?', $investment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mutualfunds'); ?></h3>
	<?php if (!empty($customer['Mutualfund'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Ticker'); ?></th>
		<th><?php echo __('Fund Name'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Fund Family'); ?></th>
		<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Mutualfund'] as $mutualfund): ?>
		<tr>
			<td><?php echo $mutualfund['id']; ?></td>
			<td><?php echo $mutualfund['customer_id']; ?></td>
			<td><?php echo $mutualfund['ticker']; ?></td>
			<td><?php echo $mutualfund['fund_name']; ?></td>
			<td><?php echo $mutualfund['category']; ?></td>
			<td><?php echo $mutualfund['fund_family']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mutualfunds', 'action' => 'view', $mutualfund['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mutualfunds', 'action' => 'edit', $mutualfund['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mutualfunds', 'action' => 'delete', $mutualfund['id']), array(), __('Are you sure you want to delete # %s?', $mutualfund['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mutualfund'), array('controller' => 'mutualfunds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stocks'); ?></h3>
	<?php if (!empty($customer['Stock'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Stock Symbol'); ?></th>
		<th><?php echo __('Stock Name'); ?></th>
		<th><?php echo __('Units Purchased'); ?></th>
		<th><?php echo __('Purchase Price'); ?></th>
		<th><?php echo __('Current Price'); ?></th>
		<th><?php echo __('Date Purchased'); ?></th>
		<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Stock'] as $stock): ?>
		<tr>
			<td><?php echo $stock['id']; ?></td>
			<td><?php echo $stock['customer_id']; ?></td>
			<td><?php echo $stock['stock_symbol']; ?></td>
			<td><?php echo $stock['stock_name']; ?></td>
			<td><?php echo $stock['units_purchased']; ?></td>
			<td><?php echo $stock['purchase_price']; ?></td>
			<td><?php  require_once('nusoap.php');  $c = new nusoap_client('http://loki.ist.unomaha.edu/~groyce/ws/stockquoteservice.php'); echo $c->call('getStockQuote', array('symbol' => $stock['stock_symbol'])) ?></td>
			<td><?php echo $stock['date_purchased']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stocks', 'action' => 'view', $stock['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stocks', 'action' => 'edit', $stock['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stocks', 'action' => 'delete', $stock['id']), array(), __('Are you sure you want to delete # %s?', $stock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
