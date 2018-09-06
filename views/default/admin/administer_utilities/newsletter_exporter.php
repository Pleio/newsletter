<?php

echo "<form action='" . $vars['url'] . "action/newsletter/admin/newsletter_exporter' method='POST'>";
echo elgg_view("input/securitytoken");
echo elgg_view("input/submit", array("value" => elgg_echo("admin:administer_utilities:newsletter_exporter:export_subscribers")));
echo "</form>";
