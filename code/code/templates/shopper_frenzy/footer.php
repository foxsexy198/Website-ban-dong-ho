<?php
/**
* @version $Id: footer.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

global $mainframe;

jimport('joomla.utilities.date');

$date = new JDate();
$cur_year	= $date->toFormat('%Y');
$csite_name	= $mainframe->getCfg('sitename');

// NOTE - You may change this file to suit your site needs
?>
<span class="footerc">
Copyright &copy; <?php echo $cur_year;?>.  <?php echo $csite_name;?>.
Shared by <a href="http://www.freeshareall.com/" class="footerc" title="Visit FreeShareAll.Com" target="blank">FreeShareAll.Com</a>
</span>
