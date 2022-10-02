

<?php

require_once "generator_html.php";

use Google\Service\Classroom\Form;

function check($item)
{
    if ($item == 'TRUE') {
        return 'checked';
    } else {
        return '';
    }
}

function SearchRecordsReestrPhp($dataTable, $dataForma)
{
    array_pop($dataForma);

    if (!empty($dataForma)) {
        return 'false';
    }

    // echo '<pre>';

    // var_dump(empty($dataForma));
    // var_dump($dataForma);


    //  var_dump((count($dataForma)));

    //die;
    $dataTableSlice = array_slice($dataTable, 1);
    $dataTableFilter = array_filter($dataTableSlice, fn ($x) => $x[5] != '');

    $returnRows = [];

    foreach ($dataTableFilter as $value) {

        $evalRows = [];

        if (!$dataForma['check-date-reestr']) {
            if ($dataForma['dateendreestr'] != '') {
                if (strtotime($value[0]) == strtotime($dataForma['dateendreestr'])) {
                    array_push($evalRows, 'yes');
                } else {
                    array_push($evalRows, 'no');
                }
            } else {
                array_push($evalRows, 'yes');
            }

            if ($dataForma['datestartreestr'] != '') {
                if (strtotime($value[1]) == strtotime($dataForma['datestartreestr'])) {
                    array_push($evalRows, 'yes');
                } else {
                    array_push($evalRows, 'no');
                }
            } else {
                array_push($evalRows, 'yes');
            }
        }

        if ($dataForma['check-date-reestr'] === '<') {
            if ($dataForma['dateendreestr'] and $dataForma['datestartreestr']) {
                if (strtotime($value[0]) <= $dataForma['dateendreestr'] and strtotime($value[0]) >= $dataForma['datestartreestr']) {
                    array_push($evalRows, 'yes');
                } else {
                    array_push($evalRows, 'no');
                }
            } else {
                array_push($evalRows, 'yes');
            }
        }

        if ($dataForma['check-date-reestr'] === '>') {
            if ($dataForma['dateendreestr'] and $dataForma['datestartreestr']) {
                if (strtotime($value[1]) <=  $dataForma['dateendreestr'] and strtotime($value[1]) >= $dataForma['datestartreestr']) {
                    array_push($evalRows, 'yes');
                } else {
                    array_push($evalRows, 'no');
                }
            } else {
                array_push($evalRows, 'yes');
            }
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////
        if ($dataForma['firmareestr']) {
            if (strval(strtoupper($value[2])) == strtoupper($dataForma['firmareestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['rabotareestr']) {
            if (strval(strtoupper($value[3])) == strtoupper($dataForma['rabotareestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['coderabotareestr']) {
            if (strval(strtoupper($value[4])) == strtoupper($dataForma['coderabotareestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['proektreestr']) {
            if ($value[5] == +$dataForma['proektreestr']) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['sotrreestr']) {
            if (strval(strtoupper($value[6])) == strtoupper($dataForma['sotrreestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['ispolreestr']) {
            if (strval(strtoupper($value[7])) == strtoupper($dataForma['ispolreestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['sumispolreestr']) {
            if ($value[8] == $dataForma['sumispolreestr']) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['sumoplatareestr']) {
            if ($value[9] == $dataForma['sumoplatareestr']) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['primreestr']) {
            if (strval(strtoupper($value[10])) == strtoupper($dataForma['primreestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['primmoyoreestr']) {
            if (strval(strtoupper($value[11])) == strtoupper($dataForma['primmoyoreestr'])) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['issuepartreestr']) {
            if ($value[12] == $dataForma['issuepartreestr']) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['withoutaccountreestr']) {
            if ($value[13] == $dataForma['withoutaccountreestr']) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }

        if ($dataForma['stoppedreestr']) {
            if ($value[14] == $dataForma['stoppedreestr']) {
                array_push($evalRows, 'yes');
            } else {
                array_push($evalRows, 'no');
            }
        } else {
            array_push($evalRows, 'yes');
        }
        if (array_search('no', $evalRows) === false) {
            array_push($returnRows, $value);
        }
    };
    usort($returnRows, fn ($a, $b) => $b[5] <=> $a[5]);

    return generatorReestrHTML($returnRows);
}
// конец SearchRecordsReestrPhp()