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
 * @copyright  &copy; 2013-onwards G J Barnard in respect to modifications of the SSimple theme.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @author     Based on code originally written by Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // LESS debug.
    $name = 'theme_cordwainer/lessdebug';
    $title = get_string('lessdebug', 'theme_cordwainer');
    $description = get_string('lessdebugdesc', 'theme_cordwainer');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $settings->add($setting);

    // Invert Navbar to dark background.
    $name = 'theme_cordwainer/invert';
    $title = get_string('invert', 'theme_cordwainer');
    $description = get_string('invertdesc', 'theme_cordwainer');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_cordwainer/logo';
    $title = get_string('logo','theme_cordwainer');
    $description = get_string('logodesc', 'theme_cordwainer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_cordwainer/customcss';
    $title = get_string('customcss', 'theme_cordwainer');
    $description = get_string('customcssdesc', 'theme_cordwainer');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_cordwainer/footnote';
    $title = get_string('footnote', 'theme_cordwainer');
    $description = get_string('footnotedesc', 'theme_cordwainer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);
}
