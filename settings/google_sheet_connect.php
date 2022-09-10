
<?php

// Подключаем клиент Google таблиц

require_once '../vendor/autoload.php';

// Наш ключ доступа к сервисному аккаунту
$googleAccountKeyFilePath = '../settings/keys.json';
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

// Создаем новый клиент
$client = new Google_Client();
// Устанавливаем полномочия
$client->useApplicationDefaultCredentials();

// Добавляем область доступа к чтению, редактированию, созданию и удалению таблиц
$client->addScope('https://www.googleapis.com/auth/spreadsheets');

//$service = new Google_Service_Sheets($client);

// ID таблицы
//$spreadsheetId = '1ewk6ahWyREzSUe985l3zm_LblKpdjXs6rAHd71hXzwQ';

//$response = $service->spreadsheets->get($spreadsheetId);

 
//$range = 'База';

//$response = $service->spreadsheets_values->get($spreadsheetId, $range);
//echo (json_encode($response['values']));






//var_dump($_POST);
//print_r($response['values'][0]);
/* print_r(json_encode($response['values'][0])); */



/* $query = $conn->query("SELECT count(id) FROM users");
$totalRecords = $query->fetch_row()[0];
 
$length = $_GET['length'];
$start = $_GET['start'];
 
$sql = "SELECT fullname, email FROM users";
 
if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= " WHERE fullname like '%$search%' OR email like '%$search%'";
}
 
$sql .= " LIMIT $start, $length";
 
$query = $conn->query($sql);
$result = [];
while ($row = $query->fetch_assoc()) {
    $result[] = [
        $row['fullname'],
        $row['email'],
    ];
} */
 
/* echo json_encode([
    'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]); */