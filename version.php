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

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2013111100;
$plugin->requires  = 2013110600.00; // 2.6beta+ (Build: 20131106).
$plugin->component = 'theme_cordwainer';
$plugin->maturity = MATURITY_BETA;
$plugin->release = '2.6.0.1';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2013110500
);