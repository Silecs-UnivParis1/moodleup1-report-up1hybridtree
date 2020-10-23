<?php

/**
 * Administrator reporting
 *
 * @package    report_up1hybridtree
 * @copyright  2013-2020 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2020102200;       // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2020061502;       // Requires this Moodle version
$plugin->component = 'report_up1hybridtree'; // Full name of the plugin (used for diagnostics)

$plugin->cron      = 0;
$plugin->maturity  = MATURITY_ALPHA;
$plugin->release   = 'TODO';

$plugin->dependencies = array(
    'local_up1_courselist' => 2013071900,
);
