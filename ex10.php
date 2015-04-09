<?php

/**
 * example 1
 * demonstrates eval feature in templates
 *
 * @package XTemplate_Examples
 * @author Sam Peterson [sam.igknighted@gmail.com]
 * @copyright Sam Peterson 2014-2015
 * @see license.txt LGPL / BSD license
 * @link $HeadURL: https://xtpl.svn.sourceforge.net/svnroot/xtpl/trunk/ex1.php $
 * @version $Id: ex1.php 16 2007-01-11 03:02:49Z cocomp $
 */

	include_once('./xtemplate.class.php');

  // Check ex10.xtpl to see the EVAL feature
	$xtpl = new XTemplate('ex10.xtpl');

	$xtpl->parse('main');
	$xtpl->out('main');

?>
