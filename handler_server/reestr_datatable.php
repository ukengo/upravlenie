
<?php

use Google\Service\ShoppingContent\Value;

require_once $_SERVER['DOCUMENT_ROOT'] . "settings/google_sheet_connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "settings/tables.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "source/php/table_reestr/functions_reestr.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "source/php/functions.php";

$service = new Google_Service_Sheets($client);


// чтение таблицы "Реестр оформлений+" лист База
$response = $service->spreadsheets_values->get($IdReestr, $rangeReestrBase);

// чтение таблицы "Управление", лист База, колонка проектов
$responseRangeUpravlenieBaseProekt = $service->spreadsheets_values->get($IdUpravlenie, $rangeUpravlenieBaseProekt);

// чтение таблицы "Реестр оформлений+", лист База, колонка проектов
$responseRangeReestrBaseProekt = $service->spreadsheets_values->get($IdReestr, $rangeReestrBaseProekt);


if (isset($_POST['action'])) {
    $action = trim($_POST['action']);
    switch ($action) {
        case 'full_table_base':
            echo (json_encode($response['values']));
            break;
        case 'table_reestr':
            echo (SearchRecordsReestrPhp(($response['values']), $_POST));
            break;
        case 'table_search_reestr':
            updateReestr();
            break;
    }
}
//updateReestr();
//var_dump($_POST['action']);

?>