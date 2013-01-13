<?php

function buildMobileMenu($array, $currentLocation = null) {
	if (!is_array($array)) return;
	global $app;
	if (is_null($currentLocation)) $currentLocation = $app->request()->getPath();

	$output = "<select>\n";
	foreach ($array as $destination => $label) {
		$selected = ($currentLocation == $destination ? ' selected="selected"' : '');
		$output .= "\t" . '<option value="' . $destination . '"' . $selected . '>' . $label . '</option>' . "\n";
	}
	$output .= "</select>\n";

	return $output;
}