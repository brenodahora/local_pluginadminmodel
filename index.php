<?php

require_once("../../config.php");
require_once($CFG->libdir.'/adminlib.php');

admin_externalpage_setup('newadminpage');

$PAGE->set_url('/local/pluginadminmodel/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title("Admin page model");
$PAGE->set_heading("Admin page model");
$PAGE->set_pagelayout('admin');

echo $OUTPUT->header();

echo("Hello World!");

echo $OUTPUT->footer();
