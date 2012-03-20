<?php defined( '_JEXEC' ) or die;

// To enable use of site configuration
$app = JFactory::getApplication();
// Returns a reference to the global document object
$doc = JFactory::getDocument();
// Load our stylesheet using the Joomla framework
$doc->addStyleSheet('templates/' . $this->template . '/css/screen.css','text/css','screen');

// Other examples:
// $doc->addCustomTag('<meta name="author" content="Matt Thomas, matt@betweenbrain.com" />');
// $doc->addFavicon('templates/' . $this->template . '/favicon.png','image/png','shortcut icon');
// $doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
// $doc->addStyleSheet('http://fonts.googleapis.com/css?family=ubuntu');
// $doc->addStyleDeclaration(' body {font-family: "Ubuntu", serif;}');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <jdoc:include type="head" />
</head>

<body>

<div id="wrap">

    <div id="header">
	    <h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename')) ?>"><?php echo htmlspecialchars($app->getCfg('sitename')) ?></a></h1>
    </div>

    <?php if ($this->countModules('message')) : ?>
    <p id="message">
	    <jdoc:include type="modules" name="message" style="raw"/>
    </p>
    <?php endif; ?>

	<div id="content">
		<div class="gutter">
    		<jdoc:include type="message" />
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
