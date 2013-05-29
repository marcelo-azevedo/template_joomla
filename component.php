<?php
/**
 * @package    Nome_do_Template
 * @subpackage  tpl_nome_do_template
 * @copyright  Copyright (C) AtomTech, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// define variables
$path = $this->baseurl . '/templates/' . $this->template;
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link href="<?php echo $path ?>/css/normalize.css.css" rel="stylesheet">
	<link href="<?php echo $path ?>/css/template.css" rel="stylesheet">
	<script src="<?php echo $path ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="contentpane">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>