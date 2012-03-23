<?php defined( '_JEXEC' ) or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:jdoc="http://www.w3.org/1999/XSL/Transform" lang="en" xml:lang="en">
<head>
    <title>Bulletproof Pretzel Company</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/screen.css" />
</head>

<body>

<div id="wrap">

	<div id="header">
		<h1>Bulletproof Pretzel Company</h1>
	</div>

	<div id="message">
		<jdoc:include type="modules" name="position-12" />
	</div>

	<jdoc:include type="modules" name="position-1" />

	<div id="content">
		<div class="gutter">
			<jdoc:include type="component" />
		</div>
	</div>

	<div id="sidebar">
		<div class="gutter">
			<jdoc:include type="modules" name="position-7" />
		</div>
	</div>

	<div id="footer">
		<p>Copyright &copy; 2007 Bulletproof Pretzel Company.  All rights reserved.</p>
	</div>

</div> <!-- end #wrap -->

</body>
</html>

