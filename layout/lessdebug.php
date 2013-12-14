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
 * Cordwainer theme with the underlying Bootstrap theme.
 *
 * @package    theme
 * @subpackage cordwainer
 * @copyright  &copy; 2013-onwards G J Barnard in respect to modifications of the Clean theme.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if ($debugparam = optional_param('lessdebug', 1, PARAM_INT)) {
    $debugparam--;
    set_config('lessdebug', $debugparam, 'theme_cordwainer');
    $PAGE->theme->settings->lessdebug = $debugparam;
}
if ($PAGE->theme->settings->lessdebug) {
    // Exclude the moodle sheets.
    $PAGE->theme->parents_exclude_sheets = array(
        'bootstrapbase' => array(
            'moodle',
            'editor'
        )
    );
    $PAGE->theme->sheets[] = 'lessdebugprocess';
}
?>