<?php
//core file, reference..
require_once "ajax.php";

$ajax = ajax();



$url = $ajax->config->crossdomain_url; //reserved, some servers don't allow outbund requestt.
//For testing purposes the crossdomain_url setting can be speficied in config.
if(!$url) {
	$url = 'http://ajax-framework-for-codeigniter.googlecode.com/svn/trunk/_extra/test/cross_domain.php';
}

$ajax->click('btn_request', $ajax->call($url,'div_response'));


?>
<!doctype html>
<head>
	<link rel="stylesheet" type="text/css" href="resources/css/user_guide.css" media="all">
	<title>Cross Domain Ajax</title>
	<?php echo $ajax->init();?>
</head>
<body>
<header>
	<div style='padding: 15px;'>
		<a href='http://cjax.sourceforge.net'><img src='http://cjax.sourceforge.net/media/logo.png' border=0/></a>
	</div>
</header>
<!-- START NAVIGATION -->
<div id="nav"><div id="nav_inner"></div></div>
<div id="nav2"><a name="top">&nbsp;</a></div>
<div id="masthead">
	<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
		<tr>
			<td><h1>Cjax Framework</h1></td>
			<td id="breadcrumb_right"><a href="#">Demos</a></td>
		</tr>
	</table>
</div>
<!-- END NAVIGATION -->



<!-- START BREADCRUMB -->
<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
	<tr>
		<td id="breadcrumb">
			<a href="http://cjax.sourceforge.net/">Project Home</a> &nbsp;&#8250;&nbsp;
			<a href="./">Demos</a> &nbsp;&#8250;&nbsp;
			Cross Domain Ajax
		</td>
		<td id="searchbox"><form method="get" action="http://www.google.com/search"><input type="hidden" name="as_sitesearch" id="as_sitesearch" value="cjax.sourceforge.net/" />Search Project User Guide&nbsp; <input type="text" class="input" style="width:200px;" name="q" id="q" size="31" maxlength="255" value="" />&nbsp;<input type="submit" class="submit" name="sa" value="Go" /></form></td>
	</tr>
</table>
<!-- END BREADCRUMB -->

<br clear="all" />

<div id="content">


	With cross domain ajax you can request any other remote content/html or text  back and forth, you can also request commands from remote ajax controllers.


	<h3>Examples</h3>

	Code Used:
	<?php
	echo $ajax->code("
		\$ajax->click('btn_request', \$ajax->call('https://raw.githubusercontent.com/ajaxboy/cjax/master/CHANGELOG.txt','div_response'));
		", true, true);
	?>

	<!-- HTML -->
	The link bellow will fire a request to  a different domain.
	<br />
	<a id='btn_request' href='#'>Request</a>
	<br />
	<div id='div_response'></div>

	<br />
</div>
<!-- END CONTENT -->

<div id="myfooter">
	<p>
		Previous Topic:&nbsp;&nbsp;<a href="#">Previous Class</a>
		&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;
		<a href="#top">Top of Page</a>&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;
		<a href="http://cjax.sourceforge.net/examples">Demos Home</a>&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;
		<!-- Next Topic:&nbsp;&nbsp;<a href="#">Next Class</a> -->
	</p>
	<p>
		<a href="http://codeigniter.com">CodeIgniter</a> &nbsp;&middot;&nbsp; Copyright &#169; 2006 - 2012 &nbsp;&middot;&nbsp;
		<a href="http://cjax.sourceforge.net/">Cjax</a>
	</p>
</div>

</body>
</html>