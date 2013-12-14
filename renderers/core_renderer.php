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
 * @author     Based on code originally written by Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class theme_cordwainer_core_renderer extends theme_bootstrapbase_core_renderer {

    /**
     * Returns HTML to display the LESS debugging button.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     * @return string HTML the button
     */
    public function lessdebug_button(moodle_url $url) {
        $themedesignermode = get_config('core', 'themedesignermode');
        if (!$themedesignermode) {
            return html_writer::tag('div', get_string('themedesignermodeon', 'theme_cordwainer') ,array('class' => 'btn btn-danger', 'title' => get_string('themedesignermodeon', 'theme_cordwainer')));
        } else {
            $url->param('sesskey', sesskey());
            if ($this->page->theme->settings->lessdebug) {
                $url->param('lessdebug', '1');
                $btn = 'btn-danger';
                $title = get_string('turnlessdebugoff', 'theme_cordwainer');
                $icon = 'icon-off';
            } else {
                $url->param('lessdebug', '2');
                $btn = 'btn-success';
                $title = get_string('turnlessdebugon', 'theme_cordwainer');
                $icon = 'icon-edit';
            }

            return html_writer::tag('a', html_writer::start_tag('i', array('class' => $icon . ' icon-white')) .
                       html_writer::end_tag('i'), array('href' => $url, 'class' => 'btn ' . $btn, 'title' => $title));
        }
    }
}

