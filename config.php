<?php 

$sodas_doc_root = $_SERVER["DOCUMENT_ROOT"];

// Master config file for sodas
define("sodas_config", 1); // DO NOT CHANGE

// Database conneection info
define("sodas_db_host", $_SESSION['FDN']['DB']['HOST']);
define("sodas_db_name", $_SESSION['FDN']['DB']['DATABASE']);
define("sodas_db_user", $_SESSION['FDN']['DB']['USERNAME']);
define("sodas_db_pass", $_SESSION['FDN']['DB']['PASSWORD']);

// Turn logs on or off
define("sodas_log_status_query", true); // Query log on or off (true | false)
define("sodas_log_status_connection", true); // Connection log on or off (true | false)
define("sodas_log_status_error", true); // Error log on or off (true |)

// Log file paths (directories)
define("sodas_log_file_dir_query", $sodas_doc_root . "/src/app/plugins/sodas/logs/"); // Query log file location
define("sodas_log_file_dir_connection", $sodas_doc_root . "/src/app/plugins/sodas/logs/"); // Connection log file location
define("sodas_log_file_dir_query_error", $sodas_doc_root . "/src/app/plugins/sodas/logs/"); // Query error log file location
define("sodas_log_file_dir_connection_error", $sodas_doc_root . "/src/app/plugins/sodas/logs/"); // Connection error log file location

// Log options
define("soads_log_time_limit_query", "M"); // Default to monthly - "W" (Weekly) | "M" (Monthly) | "Q" (Quarterly) | "Y" (Yearly)
define("soads_log_time_limit_connection", "M"); // Default to monthly - "W" (Weekly) | "M" (Monthly) | "Q" (Quarterly) | "Y" (Yearly)

?>