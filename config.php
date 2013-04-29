<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Cordwainer theme for use by theme designers to customise the Bootstrap theme
 * using FireFox(http://www.mozilla.org/firefox/) with FireBug(http://getfirebug.com/)
 * and FireLess(https://addons.mozilla.org/en-us/firefox/addon/fireless/).
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme
 * @subpackage cordwainer
 * @copyright  &copy; 2013-onwards G J Barnard in respect to modifications of the Simple theme.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @author     Based on code originally written by Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'cordwainer';

//
$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase');
$THEME->sheets = array('custom');
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();

// Exclude the moodle sheets.  Less files included in the layout file 'general.php'.
$THEME->parents_exclude_sheets = array(
    'bootstrapbase' => array(
        'moodle',
        'editor'
    )
);

$THEME->editor_sheets = array();

$THEME->plugins_exclude_sheets = array(
    'block' => array(
        'html'
    ),
    'gradereport' => array(
        'grader'
    ),
);

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'cordwainer_process_css';

// Less client side JavaScript to create the css at the client end with
// 'options' defined before that defines the options to 'Less' that assist
// FireLess to debug the styles.
$THEME->javascripts = array(
    'options',
    'less-1.3.3.min'
);

$useragent = '';
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $useragent = $_SERVER['HTTP_USER_AGENT'];
}
if (strpos($useragent, 'MSIE 8') || strpos($useragent, 'MSIE 7')) {
    $THEME->javascripts[] = 'html5shiv';
}
