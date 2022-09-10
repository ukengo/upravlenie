<?php 
require_once "../settings/google_sheet_connect.php";
require_once "../settings/tables.php";
$service = new Google_Service_Sheets($client);

// таблица Управлеие лист База
$response = $service->spreadsheets_values->get($IdReestr, $rangeReestrBase);
echo (json_encode($response['values']));


?>