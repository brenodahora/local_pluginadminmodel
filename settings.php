<?php

/**
 * Settings details
 *
 * Create link on Local Plugins to Admin Page
 *
 * @package    local_pluginadminmodel
 * @copyright  Breno Aires da Hora.
 */

defined('MOODLE_INTERNAL') || die();

if (is_siteadmin()) {
    $ADMIN->add('localplugins', new admin_externalpage(
        'newadminpage',
        new lang_string('pluginname', 'local_pluginadminmodel'),
        $CFG->wwwroot . '/local/pluginadminmodel/index.php'
    ));
}
