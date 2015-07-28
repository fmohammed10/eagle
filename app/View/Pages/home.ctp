<!DOCTYPE html>
<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @package		  app.webroot.img
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<link rel="stylesheet" href="app/webroot/css/eagle.css" type="text/css">

<h2 align="center"><?php echo '<img src="app/webroot/img/eagle_icon.jpg" alt="EFS" width="300" height="200"/>'; ?></h2>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<h2 align='center' ><?php echo __d('intro', 'Eagle Financial Services'); ?></h2>
<h2 align='center' ><?php echo __d('intro', 'Your Midwest Financial Services Partner'); ?></h2>
<h3 align='center' ><?php echo __d('intro', 'Financial Advisor Portfolio Planner'); ?></h3>
<h3 align='left' ><?php echo __d('intro', 'Portfolio Planner Options'); ?>
</h3>
<div class='third' id='drop_down'>
<select id="animal" name="animal">                      
  <option value="0">Select an option</option>
  <option value="1">Select a customer and review profile</option>
  <option value="2">Update Stock Portfolio</option>
  <br />
  <br />
  <br />
  <option value="3">Update Non-Stock Investments</option>
</select>
</div>
<!-- <p align='center'>
<?php
// echo __d('cake_dev', 'To change the content of this page, edit: %s.<br />
// To change its layout, edit: %s.<br />
// You can also add some CSS styles for your pages at: %s.',
// 	'APP/View/Pages/home.ctp', 'APP/View/Layouts/default.ctp', 'APP/webroot/css');
?>
</p> -->

<p align='center'>
	<?php
	echo $this->Html->link(
		__d('customers', 'Customers'),
		'http://localhost:8080/eagle/customers',
		array('target' => '_blank', 'escape' => false)
	);
	?>
</p>
<p align='center'>
	<?php
	echo $this->Html->link(
		__d('investments', 'Investments'),
		'http://localhost:8080/eagle/investments',
		array('target' => '_blank', 'escape' => false)
	);
	?>
</p>
<p align='center'>
	<?php
	echo $this->Html->link(
		__d('stocks', 'Stocks'),
		'http://localhost:8080/eagle/stocks',
		array('target' => '_blank', 'escape' => false)
	);
	?>
</p>
<p align='center'>
	<?php
	echo $this->Html->link(
		__d('mutualfunds', 'Mutualfunds'),
		'http://localhost:8080/eagle/mutualfunds',
		array('target' => '_blank', 'escape' => false)
	);
	?>
</p>

