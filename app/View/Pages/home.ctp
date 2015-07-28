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
<body>
<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentation"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">Tab 1</a></li>
  <li class="tab-title" role="presentation"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2">Tab 2</a></li>
  <li class="tab-title" role="presentation"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-3">Tab 3</a></li>
  <li class="tab-title" role="presentation"><a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-4">Tab 4</a></li>
</ul>
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
    <h2>First panel content goes here...</h2>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
    <h2>Second panel content goes here...</h2>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-3">
    <h2>Third panel content goes here...</h2>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-4">
    <h2>Fourth panel content goes here...</h2>
  </section>
</div>
</body>

