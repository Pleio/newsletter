<?php

	$english = array(
		// general
		'item:object:newsletter' => "Newsletter",
		'newsletter:add' => "New newsletter",
		'newsletter:subscribe' => "Subscribe",
		'newsletter:unsubscribe' => "Unsubscribe",
		
		// menu's
		'newsletter:menu:site' => "Newsletters",
		'' => "",
		
		'newsletter:breadcrumb:site' => "Newsletters",
		'' => "",
		
		// pages
		'newsletter:site:title' => "All site newsletters",
		'newsletter:add:title' => "Create a newsletter",
		'newsletter:edit:title' => "Edit newsletter: %s",
		'newsletter:schedule:title' => "%s: Schedule",
		
		// edit tabs
		'newsletter:edit:tabs:entity' => "Basic",
		'newsletter:edit:tabs:content' => "Content",
		'newsletter:edit:tabs:styling' => "Styling",
		'newsletter:edit:tabs:recipients' => "Recipients",
		'newsletter:edit:tabs:schedule' => "Schedule",

		// content
		'newsletter:edit:content:description' => "Add the content to your newsletter here. Add sections of free text or import an existing blog as content into your newsletter. You can always reorder the content of this newsletter.",
	
		// schedule
		'newsletter:schedule:description' => "Here you can configure when the newsletter will be delivered to the selected recipients.",
		'newsletter:schedule:date' => "Scheduled date",
		'newsletter:schedule:time' => "Scheduled time",

		// recipients
		'newsletter:recipients:title' => "Select recipients",
		'newsletter:recipients:description' => "Below you can configure who you want to receive the newsletter.",
		'newsletter:recipients:recipient' => "Search a recipient",
		'newsletter:recipients:recipient:description' => "You can search on name, email and username. Please select one from the dropdown to add the reciepient.",
		'newsletter:recipients' => "Recipients",
		'newsletter:recipients:subscribers' => "To all subscribers",
		'newsletter:recipients:members' => "To all members",
		'newsletter:recipients:members:site' => "site members",
		'newsletter:recipients:members:group' => "group members",
		'newsletter:recipients:email' => "E-mail address",
		
		// plugin settings
		'newsletter:settings:allow_groups' => "Allow group admins to send newsletters",
		'newsletter:settings:allow_groups:description' => "Group administrators can create a newsletter for their group members.",
		'newsletter:settings:opt_out_existing_users' => "Existing users have to opt-out of the newsletters",
		'newsletter:settings:opt_out_existing_users:description' => "When you set this setting to 'yes' users who haven't yet configured their newsletter preferences will receive a newsletter.",
		
		// entity view
		'newsletter:entity:scheduled' => "Scheduled",
		'newsletter:entity:sent' => "Sent",
		
		// sidebar - subscribe
		'newsletter:sidebar:subscribe:title' => "Newsletter subscription",
		'newsletter:subscribe:email:description' => "Subscribe to the %s newsletter",
		'newsletter:subscribe:user:description:subscribe' => "Subscribe to the %s newsletter",
		'newsletter:subscribe:user:description:unsubscribe' => "Unsubscribe from the %s newsletter",
		
		// actions
		// edit
		'newsletter:action:edit:error:title' => "Please provide a title for the newsletter",
		'newsletter:action:edit:error:save' => "An unknown error occured while saving the newsletter, please try again",
		'newsletter:action:edit:success' => "The newsletter was saved",
		
		// delete
		'newsletter:action:delete:error:delete' => "An unknown error occured while deleting the newsletter, please try again",
		'newsletter:action:delete:success' => "The newsletter was deleted",
		
		// schedule
		'newsletter:action:schedule:success' => "Schedule saved",
		
		// recipients
		'newsletter:action:recipients:success' => "Recipients saved",
		
		// subscribe
		'newsletter:action:subscribe:error:subscribe' => "An error occured while subscribing, please try again",
		'newsletter:action:subscribe:error:unsubscribe' => "An error occured while unsubscribing, please try again",
		'newsletter:action:subscribe:success' => "You've successfully subscribed to the newsletter",
		'newsletter:action:subscribe:success:unsubscribe' => "You've successfully been unsubscribed from the newsletter",
		
		'' => "",
	);
	
	add_translation("en", $english);
