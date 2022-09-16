<?php
require_once git stash apply stash@{1} . "settings/google_sheet_connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "settings/tables.php";

$service = new Google_Service_Sheets($client);


// таблица Управлеие лист База
$response = $service->spreadsheets_values->get($IdReestr, $rangeReestrBase);
echo (json_encode($response['values']));
