<?php
// Execute adb command to take a screenshot
$adb_path = "/root/Android/Sdk/platform-tools/adb";
$output = [];
$return_var = 0;

// Take screenshot on device
exec("$adb_path shell screencap -p /sdcard/screenshot.png", $output, $return_var);

// Pull screenshot to server
exec("$adb_path pull /sdcard/screenshot.png .", $output, $return_var);

// Return success
echo "Screenshot refreshed";
?>
