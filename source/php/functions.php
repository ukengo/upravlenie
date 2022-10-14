<?php
function searchRow($dataForma, $dataTable) {
    //превращаем двухмерный массив в одномерный
    $result = array_reduce($dataTable, 'array_merge', array());
    $key = array_search($dataForma, $result);
    return $key+1;
}

