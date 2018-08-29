<?php
function log_me($file_to_log_to, $what_to_log) {
	//this only works for single line, after that the line is overwritten
	$log_file = fopen($file_to_log_to, "w");
	fwrite($log_file, $what_to_log);
	fclose($log_file);
}
$log_me_test = false;
if ($log_me_test == true) {
	log_me("/var/www/html/global_backend/check.txt", "Success");
}
?>
