<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "handler_server/reestr_datatable.php";

// отбор значений для выпадающих списков
function dropDownlist($data, $col)
{
    $arr = $data['values'];
    $arrSlice = array_slice($arr, 1);
    $arrFilter = array_filter($arrSlice, fn ($x) => $x[5] != '');
    $arrMap = array_map(fn ($x) => $x[$col], $arrFilter);
    $arrUnique = array_unique($arrMap);
    return ($arrUnique);
}