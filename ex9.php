<!-- BEGIN: header -->
This is the header <br>
<!-- END: header -->

<!-- BEGIN: page_content -->
{username} wrote {dialog}<br>
<!-- END: page_content -->

<!-- BEGIN: footer -->
This is the footer <br>
<!-- END: footer -->

<?php

/**
 * example 9
 * demonstrates how to reuse instance of class xTemplate()
 *
 * @package XTemplate_Examples
 * @author Sam Peterson <sam.igknighted@gmail.com>
 * @copyright Sam Peterson 2014
 * @see license.txt BSD license
 */

require_once('xtemplate.class.php');
$xtpl = new XTemplate('ex9.xtpl');


$xtpl->parse('header');
$xtpl->out('header');

// switch to different template file
$xtpl->restart('ex9-content.xtpl');

// variables stay assigned untill reassigned.
$xtpl->assign('username', 'Bob');
$xtpl->assign('dialog', 'Hey there');
$xtpl->parse('page_content');

$xtpl->assign('dialog', 'How are you');
$xtpl->parse('page_content');

$xtpl->assign('username', 'Joe');
$xtpl->assign('dialog', 'I am good!');
$xtpl->parse('page_content');

$xtpl->assign('dialog', 'You?');
$xtpl->parse('page_content');

$xtpl->assign('username', 'Bob');
$xtpl->assign('dialog', 'Swell!');

// Content out
$xtpl->parse('page_content');
$xtpl->out('page_content');

// I didn't test this... so yeah...

$xtpl->restart('ex9.xtpl');
$xtpl->parse('footer');
$xtpl->out('footer');
