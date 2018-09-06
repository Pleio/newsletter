<?php

error_log('asdfsdf');

global $DB_QUERY_CACHE;
$DB_QUERY_CACHE = false; // no need for cache. Will only cause OOM issues

set_time_limit(0);

$filename = 'export.csv';

$fieldtype = get_input("fieldtype");
$fields = get_input("export");


header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename={$filename}");
header("Content-Transfer-Encoding: binary");

ob_start();

$df = fopen("php://output", 'w');

$site = elgg_get_site_entity();

fputcsv($df, array('email'));
$subscribers = newsletter_get_subscribers($site);
foreach ($subscribers['users'] as $email)  {
    fputcsv($df, array($email));
}
foreach ($subscribers['emails'] as $email)  {
    fputcsv($df, array($email));
}

fclose($df);

echo ob_get_clean();
exit;
exit();
