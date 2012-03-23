<?php defined( '_JEXEC' ) or die;

// Import Joomla filesystem package
jimport('joomla.filesystem.file');

/*
 * Load template logic
 */

// Create an absolute path to your included file for security reasons
$logicFile = JPATH_THEMES. '/' . $this->template . '/logic.php';

// Load the file conditionally to avoid fatal errors if it is missing
if(JFile::exists($logicFile)) {
	include $logicFile;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:jdoc="http://www.w3.org/1999/XSL/Transform" lang="en" xml:lang="en">
<head>
<jdoc:include type="head" />
</head>

<body class="<?php echo $columnLayout; ?>" >

<div id="wrap">

	<div id="header">
		<h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename')) ?>"><?php echo htmlspecialchars($app->getCfg('sitename')) ?></a></h1>
	</div>

	<?php if ($this->countModules('position-12')) : ?>
	<div id="message">
		<jdoc:include type="modules" name="position-12" />
	</div>
	<?php endif; ?>

	<?php if ($this->countModules('position-1')) : ?>
	<div id="nav">
	<jdoc:include type="modules" name="position-1" />
	</div>
	<?php endif; ?>

	<div id="content">
		<div class="gutter">
			<?php if (count($app->getMessageQueue())) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<jdoc:include type="component" />
		</div>
	</div>

	<?php if ($this->countModules('position-7')) : ?>
	<div id="sidebar">
		<div class="gutter">
			<jdoc:include type="modules" name="position-7" style="xhtml"/>
		</div>
	</div>
	<?php endif; ?>

	<div id="footer">
		<jdoc:include type="modules" name="footer" style="xhtml"/>
	</div>

</div> <!-- end #wrap -->

</body>
</html>

