<?php

require_once "ajax.php";
$ajax = ajax();

$ajax->click("btnSubmit",$ajax->form("ajax.php?send_form/submit_form"));

### below is an HTML form.  All you need is the id of the button that submits the form, and all the code is needed is above. 
### look inside controllers/send_form.php for response code sample.

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $ajax->init();?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Send Form...</title>
	<link rel="stylesheet" type="text/css" href="resources/send_form/view.css" media="all">
	<script type="text/javascript" src="resources/send_form/view.js"></script>
</head>
<body>
<h2>Submit form with Ajax</h2>
<br />
Convert any HTML form over to ajax
<br />
<br />
<div style="text-align: left">
<?php 
echo $ajax->code("
//bind button to ajax-form request
//gets the buttons's form and uses it.
\$ajax->click(\"btnSubmit\",\$ajax->form(\"ajax.php?send_form/submit_form\"));
");?>
Controller:
<?php 
echo $ajax->code("
class send_form {
	
	function submit_form(\$form_fields)
	{
		\$ajax = ajax();
		
		\$ajax->alert(\"Server Says....\\n\\t\\t\".print_r(\$form_fields,1));
	}
}
");?>
</div>
<div id="main_body" >
	<img id="top" src="resources/send_form/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Send form to server using ajax..</a></h1>

		<form id="form1" name="form1" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Submit Form</h2>
			<p>Send any form data through ajax...</p>
		</div>						
		<ul>
		<li id="li_2" >
			<label class="description" for="element_2">Name </label>
	
			<span>
				<input id="a[name]" name="a[name]" class="element text" maxlength="255" size="8" value=""/>
				<label>First</label>
			</span>
			<span>
				<input id="a[last_name]" name="a[last_name]" class="element text" maxlength="255" size="14" value=""/>
				<label>Last</label>
			</span> 
		</li>		<li id="li_4" >

		<label class="description" for="element_4">Drop Down </label>
		<div>
		<select class="element select medium" id="a[drop_down]" name="a[drop_down]"> 
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
		</select>

		</div> 
		</li>		
		<li id="li_1" >
		<label class="description" for="element_1">Country </label>
		<div>
			<input id="a[country]" name="a[country]" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">State </label>

		<div>
			<input id="a[state]" name="a[state]" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
		<li class="buttons">
				<input id="btnSubmit" class="button_text" type="submit" name="btnSubmit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="resources/send_form/bottom.png" alt="">
</div>
</body>

</html>
