<?php

global $DB_QUERY_CACHE;
$DB_QUERY_CACHE = false; // no need for cache. Will only cause OOM issues

set_time_limit(0);

$filename = "export.csv";

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

$df = fopen("php://output", "w");

fputcsv($df, array("email", "site/group", "name"), ";");

$site = elgg_get_site_entity();
$subscribers = newsletter_get_subscribers($site);
foreach ($subscribers["users"] as $email)  {
    fputcsv($df, array($email, "site", $site->name), ";");
}
foreach ($subscribers["emails"] as $email)  {
    fputcsv($df, array($email, "site", $site->name), ";");
}

$groups = elgg_get_entities(array("type" => "group"));
foreach ($groups as $group) {
    $subscribers = newsletter_get_subscribers($group);
    foreach ($subscribers["users"] as $email)  {
        fputcsv($df, array($email, "group", $group->name), ";");
    }
    foreach ($subscribers["emails"] as $email)  {
        fputcsv($df, array($email, "group", $group->name), ";");
    }
}

fclose($df);

echo ob_get_clean();
exit;
exit();
