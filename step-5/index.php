<?php defined( '_JEXEC' ) or die;
// Import Joomla filesystem package
jimport('joomla.filesystem.file');
// Create an absolute path to your included file for security reasons
$logicFile = JPATH_THEMES. '/' . $this->template . '/logic.php';
// Load the file conditionally to avoid fatal errors if it is missing
if(JFile::exists($logicFile)) {
	include $logicFile;
}
?>
<!DOCTYPE html>
<html lang="<?php echo substr($this->language, 0, 2) ?>">
<head>
<jdoc:include type="head" />
</head>

<body class="<?php echo $columnLayout ?>" >

<div id="wrap">

	<header id="header">
		<h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename')) ?>"><?php echo htmlspecialchars($app->getCfg('sitename')) ?></a></h1>
	</header>

	<?php if ($this->countModules('position-12')) : ?>
	<div id="message">
		<jdoc:include type="modules" name="position-12" />
	</div>
	<?php endif ?>

	<?php if ($this->countModules('position-1')) : ?>
	<nav id="nav">
	<jdoc:include type="modules" name="position-1" />
	</nav>
	<?php endif ?>

	<section id="content">
		<div class="gutter">
			<?php if (count($app->getMessageQueue())) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<jdoc:include type="component" />
		</div>
	</section>

	<?php if ($this->countModules('position-7')) : ?>
	<div id="sidebar">
		<div class="gutter">
			<jdoc:include type="modules" name="position-7" style="xhtml"/>
		</div>
	</div>
	<?php endif ?>

	<footer id="footer">
		<jdoc:include type="modules" name="footer" style="xhtml"/>
	</footer>

</div> <!-- end #wrap -->

</body>
</html>
