<?php

	function newsletter_page_handler($page) {
		$include_file = false;
		$path = dirname(dirname(__FILE__));
		
		switch ($page[0]) {
			case "edit":
				if (isset($page[1]) && is_numeric($page[1])) {
					set_input("guid", $page[1]);
					
					$subpage = elgg_extract("2", $page);
					switch ($subpage) {
						case "content":
							$include_file = $path . "/pages/edit/content.php";
							break;
						case "recipients":
							$include_file = $path . "/pages/edit/recipients.php";
							break;
						case "schedule":
							$include_file = $path . "/pages/edit/schedule.php";
							break;
						case "styling":
							$include_file = $path . "/pages/edit/styling.php";
							break;
						case "preview":
							$include_file = $path . "/pages/edit/preview.php";
							break;
						default:
							$include_file = $path . "/pages/edit/newsletter.php";
							break;
					}
				}
				break;
			case "add":
				if (isset($page[1]) && is_numeric($page[1])) {
					elgg_set_page_owner_guid($page[1]);
					
					$include_file = $path . "/pages/add.php";
				}
				break;
			case "view":
				if (isset($page[1]) && is_numeric($page[1])) {
					set_input("guid", $page[1]);
					
					$include_file = $path . "/pages/view.php";
				}
				break;
			case "group":
				if (isset($page[1]) && is_numeric($page[1])) {
					elgg_set_page_owner_guid($page[1]);
					
					$include_file = $path . "/pages/group.php";
				}
				break;
			case "site":
				$include_file = $path . "/pages/site.php";
				break;
			case "subscribe":
				if (isset($page[1]) && is_numeric($page[1])) {
					elgg_set_page_owner_guid($page[1]);
					
					$include_file = $path . "/pages/subscribe.php";
				}
				break;
			case "unsubscribe":
				if (isset($page[1]) && is_numeric($page[1])) {
					elgg_set_page_owner_guid($page[1]);
					
					$include_file = $path . "/pages/unsubscribe.php";
				}
				break;
			case "recipients":
				$include_file = $path . "/procedures/recipients.php";
				break;
			case "subscriptions":
				if (isset($page[1]) && is_numeric($page[1])) {
					elgg_set_page_owner_guid($page[1]);
						
					$include_file = $path . "/pages/subscriptions.php";
				}
				break;
			default:
				forward("newsletter/site");
				break;
		}
		
		if ($include_file) {
			include($include_file);
			return true;
		}
		
		return false;
	}