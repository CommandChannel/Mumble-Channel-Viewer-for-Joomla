<?php
/**
 * Mumble Channel Viewer module entry point
 *
 * @package MumbleChannelViewer
 * @author Mike Johnson <mikej@commandchannel.com>; Doug Gilbert <gilbert.159@osu.edu>
 * @copyright Copyright (c) 2011, Command Channel Corporation
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2
 * @version 1.0
 */
 
defined('_JEXEC') or die('Restricted Access');

/*include the stylesheet*/
$path =  JURI::base()."modules/mod_mumbleViewer/";
JHTML::stylesheet('mod_mumbleChannelViewer.css',$path);

require_once( dirname(__FILE__).DS.'mumbleChannelViewer.php' );

echo '<div id="mumbleViewer">';
echo MumbleChannelViewer::render($params->get('jsonUri'), 'json');
echo '</div>';
?>
