// подсветка инпута при наличии данных при щелчке любом (шрифт лабела)
document.querySelector("body").addEventListener("input", labelred);
export function labelred() {
    const nodes = document.querySelectorAll('.form-background-color input, .form-background-color select');
    const values = Array.from(nodes).map(inputElement => inputElement.value);
    const noRed = Array.from($('.checkbox-finance .form-check-label'));
    values.forEach((item, el) => {
        item = item == 'on' ? '' : item;
        if (item) {
            document.querySelector("label[for='" + document.querySelectorAll('.form-background-color input, .form-background-color select')[el]
                .getAttribute('id') + "']").style.color = '#dc3545';
        } else {
            document.querySelector("label[for='" + document.querySelectorAll('.form-background-color input, .form-background-color select')[el]
                .getAttribute('id') + "']").style.color = '';
        }
    });
    noRed.forEach((item) => {
        item.style.color = '';
    });
};

// перехват события вставки и обрезка пробелов в поле input[type="search"]
$(document).ready(trimmingSpaces);
export function trimmingSpaces() {
    var lastKeyCode = 0;
    $('input[type="search"]').bind('keydown', function (e) {
        lastKeyCode = e.keyCode;
    });
    // Bind on the input having changed.  As long as the previous character
    // was not a space, BS or Del, trim the input.
    $('input[type="search"]').bind('input', function (e) {
        if (lastKeyCode != 32 && lastKeyCode != 8 && lastKeyCode != 46) {
            $(this).val($(this).val().replace(/^\s+|\s+$/g, ''));
        }
    });
}

//очистка inputa щелчком по label и удаление красной расскраски
$("label").click(function () {
    $(this).next().val('');
    $(this).removeAttr('style');
})

// очистка поля поиска прищелчке на крестике
document.querySelector('body').addEventListener('input', () => {
    $('.input-search').triggerHandler('keyup');
})

// Функция удаления всего кроме текста (регулярное выражение)
function deleteExceptText(data) {
    return data.replace(/[^a-zа-яё]/gi, '');
}

//Получаем значение определеннной ячейки определенного столбца таблицы при клике на таблицу
function valueCellCol(this_, colIndex) {
    return $(this_).parent()[colIndex].childNodes[colIndex].innerHTML;
}

// проверяем форму на наличие чекбоксов или радиокнопок
const isCheckboxOrRadio = type => ['checkbox', 'rsdio'].includes(type);


// собираем данные форм в массив
function serializeForm(formNode) {
    let res = [];
    for (let field of formNode) {
        const { name } = field;
        if (name) {
            const { type, checked, value } = field;
            res[name] = isCheckboxOrRadio(type) ? checked : value;
        }
    }
    // преобразовываем объект в массив данных
    res = (Object.values(res));
    return res;
}

// функция проверяет устройство и срабатывает, если мобильное
export function searchMobileNot(func) {
    if (navigator.userAgent.toLowerCase().match(/mobile/i)) {
        func();
    } else {
        return;
    }
}

export function spinner(elemId) {
    document.getElementById(elemId).innerHTML = `
    <div class="d-flex justify-content-center">
        <div class="spinner-border text-danger mb-4 mt-2" role="status">            
            </div>
                Идет поиск...
            </div>
    `;
}

export function hideBtnBuh() {
    searchMobileNot(() => $('#btnBuh').hide(1000)
    );
}

//обрабатывает клик и тап на таблице для возврата текста из ячейки
export function clickTables(sel, fun) {
    const el = document.querySelector(sel);
    if (el) {
        el.addEventListener("click", fun);
        el.addEventListener('touchcancel', fun);
    };
}

// эмуляция отпускания кнопки, при щелчке поиск по таблице (автопоиск при открытии)
export function autoSearchOnOpen(selektor) {
    $(selektor).triggerHandler('keyup');
}

// достаем текст из набора TD
export function getDataFromTd(tdArr) {
    return tdArr.map(item => item.textContent);
}

/////////////////////////////////////////////////////////////////////
// Выбор для формирования выпадающих списков
// Общая функция
/**
flagNonUnique - это флаг, отвечающий за не уникальность. Если он true, то берется массив всех данных. Если он пропущен, то берется массив только уникальных данных.
*/
export function getDropDownArray(data, flagNonUnique) {
    let arr = data.filter(String).flat();
    const result = flagNonUnique ? arr : [...new Set(arr)];
    return result;
}
// Конец общей функции


export function afterDropDownReturned(arrayOfArrays, datalist) {
    let selectorDatalist = document.getElementById(datalist);
    selectorDatalist.innerHTML = null;
    arrayOfArrays.forEach((r) => {
        const selectorOption = document.createElement('option');
        selectorOption.textContent = r;
        selectorDatalist.appendChild(selectorOption)
    });
}