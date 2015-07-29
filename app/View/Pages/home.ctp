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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>
	Eagle Financial Services
</title>
<meta name="description" content="Eagle Financial Services">
<link rel="stylesheet" href="app/webroot/css/eagle2.css" type="text/css">

<?php
	if (Configure::read('debug') > 0):
		Debugger::checkSecurityKeys();
	endif;
?>
		
</head>
<body>

	<!-- <p align='center'>
	<?php
	// echo __d('cake_dev', 'To change the content of this page, edit: %s.<br />
	// To change its layout, edit: %s.<br />
	// You can also add some CSS styles for your pages at: %s.',
	// 	'APP/View/Pages/home.ctp', 'APP/View/Layouts/default.ctp', 'APP/webroot/css');
	?>
	</p> -->
	<h1 align='center'><b>EAGLE FINANCIAL SERVICES</b></h1>
	<h2 align="center"><?php echo '<img src="http://www.hiwallpaperson.com/wp-content/uploads/2015/05/eagle-bird-desktop-1024x576.jpg" alt="EFS" width="300" height="200"/>'; ?></h2>

	<h3 align='center'><?php echo __d('intro', 'Your Midwest Financial Services Partner'); ?></h3>
	<h3 align='center'><?php echo __d('intro', 'Financial Advisor Portfolio Planner'); ?></h3>

	<h3 align='center'><a href="https://github.com/fmohammed10/eagle">My Github Repository</h3>


	
<!-- <div id="navigation">
	<div class="bar">
		<ul>
			<li class="current"><a class="silver" href="http://assign-fmohammed.rhcloud.com/eagle/customers">Customers</a></li>
			<li class="product"><a class="silver" href="http://localhost:8080/eagle/stocks">Stocks</a></li>
			<li><a class="silver" href="http://assign-fmohammed.rhcloud.com/eagle/investments">Investments</a></li>
			<li><a class="silver" href="http://assign-fmohammed.rhcloud.com/eagle/mutualfunds">Mutual Funds</a></li>
		</ul>
	</div> 
</div> -->

	<!-- <br \>
	<br \>
	<br \>
	<br \>


<h3 align='left' >< ?php echo __d('intro', 'Portfolio Planner Options'); ?>
<form name="optionSelect">
<p><select name="URL"  onChange="go()">
<option value="0">Select an option</option>
<option value="http://assign-fmohammed.rhcloud.com/eagle/customers">Review Customer Profile</option>
<option value="http://assign-fmohammed.rhcloud.com/eagle/investments">Investments</option>
<option value="http://assign-fmohammed.rhcloud.com/eagle/stocks">Stock Portfolio</option>
<option value="http://localhost:8080/eagle/stocks">Mutual Funds</option>
</select></p>
 
<script type="text/javascript">
<!
function go()
{
	location=document.optionSelect.URL.options[document.optionSelect.URL.selectedIndex].value
}
//-->
<!-- </script>
</form>  -->
	<br \>
	<br \>	<br \>
	<br \>	<br \>
	<br \>	<br \>
	<br \>	<br \>
	<br \>	<br \>
	<br \>
<h3 align="left">
America was built on hard work, innovation, courage and determination. We use these same values in everything we do. They’re not just words on a wall. They represent how we’ve been doing business for more than 100 years. And it is the foundation we use to build strong relationships with the customers and communities we serve. America is the land of opportunity and Eagle Financial Services takes great pride in improving lives, growing businesses and providing the freedom to achieve our customers’ goals and realize their dreams.
</h3>

</body>
</html>