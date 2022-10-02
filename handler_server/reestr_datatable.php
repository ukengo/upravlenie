
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "settings/google_sheet_connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "settings/tables.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "source/php/table_reestr/functions_reestr.php";

$service = new Google_Service_Sheets($client);


// таблица Управлеие лист База
$response = $service->spreadsheets_values->get($IdReestr, $rangeReestrBase);

if (isset($_POST['action'])) {
    $action = trim($_POST['action']);
    switch ($action) {
        case 'full_table_base':
            echo (json_encode($response['values']));
            break;
        case 'table_reestr':
            echo (SearchRecordsReestrPhp(($response['values']), $_POST));
            break;
    }
}

?>