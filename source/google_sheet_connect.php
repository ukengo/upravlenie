

<?php

/* 
// Подключаем клиент Google таблиц
require_once __DIR__ . '/vendor/autoload.php';

// Наш ключ доступа к сервисному аккаунту
$googleAccountKeyFilePath = __DIR__ . '/keys.json';
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

// Создаем новый клиент
$client = new Google_Client();
// Устанавливаем полномочия
$client->useApplicationDefaultCredentials();

// Добавляем область доступа к чтению, редактированию, созданию и удалению таблиц
$client->addScope('https://www.googleapis.com/auth/spreadsheets');

$service = new Google_Service_Sheets($client);

// ID таблицы
$spreadsheetId = '1dvGIpn0yJv8cRk7Sw5G3xcoLcYHpe_1UB2HcE4f9k34';

//$response = $service->spreadsheets->get($spreadsheetId);


$range = 'Лист1!A1:C3';

$response = $service->spreadsheets_values->get($spreadsheetId, $range);


var_dump($response['values'][0]);
print_r($response['values'][0]);
?> */

