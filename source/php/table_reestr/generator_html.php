<?php
//require_once $_SERVER['DOCUMENT_ROOT'] . 'source/php/table_reestr/functions_reestr.php';
function generatorReestrHTML($data)
{
  $row_number_reestr = 0;

  $count = 0; // счетчик для подсчета количества при выборке
  $countStop = 0; // счетчик для подсчета количества остановленных при выборке
  foreach ($data as $row) {
    if ($row[18] == 'TRUE') {
      $countStop++;
    }
    $count++;
  }

  $a = $count - $countStop;

  $html = '<table class="table table-bordered border-danger mb-2 mt-2" id="mainTableReestr">';
  $html .= '<tr>';
  //$html .= '<th>'.$count - $countStop.' - закритих, '.$countStop.' - зупинених. Всього: '.$count.'</th>';
  $html .= '<th>' . ($count - $countStop) . ' - закрытых, ' . $countStop . ' - остановленных. Всего: ' . $count . '</th>';
  $html .= '<th></th>';
  $html .= '<th></th>';
  $html .= '<th></th>';
  $html .= '</tr>';

  foreach ($data as $row) {

    $row[0] = $row[0] ? date('Y-m-d', strtotime($row[0])) : '';
    $row[1] = $row[1] ? date('Y-m-d', strtotime($row[1])) : '';
    $row[16] = str_replace(',', '.', preg_replace("/[^,.0-9]/", '', $row[16]));
    $row[17] = str_replace(',', '.', preg_replace("/[^,.0-9]/", '', $row[17]));

    $html .= '<tr id="ROWNUMBER:' . $row_number_reestr . '">';

    $html .= '<td colspan="9">';
    $html .= '<form id="search_records_reestr'.$row_number_reestr.'">';
    $html .= '<div class="row g-1 mt-1">';
    
    $html .=
      '<div class="col-auto">
        <label for="up_dateendreestr">Дата кінець</label>
        <input type="date" name="up_dateendreestr" id="up_dateendreestr"' . $row_number_reestr . ' value="' . $row[0] . '" class="form-control form-control-sm">
      </div>';

    $html .=
      '<div class="col-auto">
        <label for=\"up_datestartreestr\">Дата початок</label>
        <input type="date" name="up_datestartreestr" id="up_datestartreestr"' . $row_number_reestr . ' value="' . $row[1] . '" class="form-control form-control-sm">
      </div>';

    $html .=
      '<div class="col-md-5">
        <label for="up_firmareestr">Фірма</label>
        <input type="text" list="firmareestr-datalist" name="up_firmareestr" id="up_firmareestr"' .  $row_number_reestr . ' value="' . $row[2] . '"class="form-control form-control-sm">
          <datalist id="firmareestr-datalist"></datalist>
      </div>';

    $html .=
      '<div class="col-md-2">
        <label for="up_rabotareestr">Робота</label>
        <input type="text" list="rabotareestr-datalist" name="up_rabotareestr" id="up_rabotareestr"' .  $row_number_reestr . ' value="' . $row[3] . '" class="form-control form-control-sm" >
          <datalist id="rabotareestr-datalist"></datalist>
      </div>';

    $html .=
      '<div class="col-md-1">
        <label for="up_coderabotareestr">Код роб</label>
        <input type="text" name="up_coderabotareestr" id="up_coderabotareestr" ' . $row_number_reestr . ' value="' . $row[4] . '" class="form-control form-control-sm">
      </div>';

    $html .=
      '<div class="col-md-2">
        <label for="up_proektreestr">Проект</label>
        <input type="number" name="up_proektreestr" id="up_proektreestr" ' . $row_number_reestr . ' value="' . $row[5] . '" class="form-control form-control-sm form-font">
      </div>';

    $html .=
      '<div class="col-auto">
        <label for="up_sotrreestr">Співробітник</label>
        <input type="text" list="sotrreestr-datalist" name="up_sotrreestr" id="up_sotrreestr" ' . $row_number_reestr . ' value="' . $row[6] . '" class="form-control form-control-sm">
      </div>';

    $html .=
      '<div class="col-auto">
        <label for="up_ispolreestr">Виконавець</label>
        <input type="text" list="ispolreestr-datalist" name="up_ispolreestr" id="up_ispolreestr" ' . $row_number_reestr . ' value="' . $row[15] . '" class="form-control form-control-sm">
      </div>';

    $html .=
      '<div class="col-md-2">
        <label for="up_sumispolreestr">Сума виконавцю</label>
        <input type="number" name="up_sumispolreestr" id="up_sumispolreestr" ' . $row_number_reestr . ' value="' .  $row[16] . '" class="form-control form-control-sm">
      </div>';
    
    $html .=
      '<div class="col-md-2">
        <label for="up_sumoplatareestr">Оплата виконавцю</label>
        <input type="number" name="up_sumoplatareestr" id="up_sumoplatareestr" ' . $row_number_reestr . ' value="' . $row[17] . '" class="form-control form-control-sm">
      </div>';

    $html .= 
      '<div class="col-md-4">
        <label for="up_primreestr">Примітки до проекту</label>
        <input type="text" list="primreestr-datalist" name="up_primreestr" id="up_primreestr" ' . $row_number_reestr . ' value="' . $row[21] . '" class="form-control form-control-sm">
          <datalist id="primreestr-datalist"></datalist>
      </div>';

    $html .=
      '<div class="col-md-4">
        <label for="up_primmoyoreestr">Примітки мої</label>
        <input type="text" list="primmoyoreestr-datalist" name="up_primmoyoreestr" id="up_primmoyoreestr" ' . $row_number_reestr . ' value="' . $row[20] . '" class="form-control form-control-sm">
          <datalist id="primmoyoreestr-datalist"></datalist>
      </div>';

    $html .='</div>';
    $html .='<div class="row g-1 mt-1">';
    $html .=
      '<div class="col-auto">
          <div class="form-check">
            <span class="check-style"></span>
           <label class="form-check-label" for="up_issuepartreestr' . $row_number_reestr . '">Выставлено частково</label> 
            <input type="checkbox" name="up_issuepartreestr" id="up_issuepartreestr' . $row_number_reestr . '"class="form-check-input"' . check($row[23]) . '>
          </div>
        </div>';
      

    $html .=
      '<div class="col-auto">
        <div class="form-check">
          <span class="check-style"></span>
          <label class="form-check-label" for="up_withoutaccountreestr' . $row_number_reestr . '">Без рахунка</label> 
          <input type="checkbox" name="up_withoutaccountreestr" id="up_withoutaccountreestr' . $row_number_reestr . '" class="form-check-input" ' . check($row[22]) . '>
        </div>
      </div>';
    $html .=
      '<div class="col-auto">
        <div class="form-check">
          <span class="check-style"></span>
          <label class="form-check-label" for="up_stoppedreestr' . $row_number_reestr . '">Зупинено</label> 
          <input type="checkbox" name="up_stoppedreestr" id="up_stoppedreestr' . $row_number_reestr . '" class="form-check-input"' . check($row[18]) . '>
        </div>
      </div>';
    
    $html .='</div>';
    $html .= '<input type="hidden" name="action" value="table_search_reestr">';
    $html .= '</form>';
    $html .= '</td>';

    $html .= '<td><div class="d-grid gap-2">';

    $html .= '<input type="button" data-row="' . $row_number_reestr . '" value="Update" class="btn btn-danger btn-update_button_reestr">';

    $html .= '<input type="button" data-row="' . $row_number_reestr . '" value="Finance" class="btn btn-danger btn_finance_button_reestr">';

    $html .= '<input type="button" data-row="' . $row_number_reestr . '" value="FinClose" class="btn btn-danger btn_inance_button_reestr_close">';

    $html .= '</td>';
    $html .= '</tr>';
    $row_number_reestr++;  }

  $html .= '</table>';

  return $html;
}
