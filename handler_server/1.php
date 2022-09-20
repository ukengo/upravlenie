<pre>
<?php
	

/*$b = $_REQUEST['age'];
$c = $_REQUEST['checkbox'];
if ($c === 'on') {
    $c = 'checkbox=true';
} else {
    $c = 'checkbox=false';
}; */


//echo $a . ' ' . $b . ' ' . $c;
echo $a;
//var_dump($_POST['checkbox']);
var_dump($_POST);
var_dump($_REQUEST);


/* function getQuerysPHP($data) {
    $queryDict = [];
    $data1 = explode('&',$data);
      foreach ($data1 as $value) {
        $param = explode('=', urldecode($value));
        $queryDict[$param[0]] = $param[1];
        
    } 
    echo $queryDict['firmareestr'];
    var_dump($queryDict);
 
};

$aa = 'dateendreestr=&check-date-reestr=&datestartreestr=&firmareestr=%D0%AD%D0%92%D0%98%20%D0%98%D0%BD%D0%B6%D0%B8%D0%BD%D0%B8%D1%80%D0%B8%D0%BD%D0%B3&rabotareestr=&coderabotareestr=&proektreestr=11733&sotrreestr=&ispolreestr=%D0%A2%D1%83%D0%B7%20103&sumispolreestr=&sumoplatareestr=&primreestr=&primmoyoreestr=';


getQuerysPHP($aa); */




/* function getQuerys(data) {
    let queryDict = {};
    data. substring(1).split('&').forEach(element => {
        let param = element.split('=');
        queryDict[param[0]] = param[1];
        
    });

    return (queryDict);
} */