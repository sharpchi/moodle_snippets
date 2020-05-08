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
 * @package   theme_chi
 * @author    Mark Sharp <m.sharp@chi.ac.uk>
 * @copyright 2017 University of Chichester {@link www.chi.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019100100;
$plugin->release  = 'v3.6.6.0';
$plugin->maturity  = MATURITY_STABLE;
$plugin->requires  = 2018120304;
$plugin->component = 'theme_chi';
$plugin->dependencies = array(
    'theme_boost'  => 2018120300,
    'tool_rollover' => 2017042000,
    'local_accessibilitytool' => 2018040301,
    'local_chi' => 2020050100,
    'report_stickers' => 2017101203
);