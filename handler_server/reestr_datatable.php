<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "settings/google_sheet_connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "settings/tables.php";

$service = new Google_Service_Sheets($client);


// таблица Управлеие лист База
$response = $service->spreadsheets_values->get($IdReestr, $rangeReestrBase);
echo (json_encode($response['values']));



/* function myFunc($par)
{
    $arr = $par['values'];
    $brr = array_slice($arr, 1);
    $crr = array_filter($brr, fn ($x) => $x[5] != '');
    $drr = array_map(fn ($x) => [$x[3]], $crr);
    ///echo $arr;


   // print_r($drr);
}
 */

/* dataTableReestr()
.then((dataArray) => {
    afterDropDownReturned(getDropDownArray(dataArray
        .slice(1)
        .filter(x => x[5] != '')
        .map(x => [x[2]])),
        'firmareestr-datalist'
        ); */

//myFunc($response);