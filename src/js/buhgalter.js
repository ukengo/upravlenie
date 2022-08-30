import { buttonClickCashe } from "./modules_buhgalter_js/cashe/cashe.js";

function buhgalterExport() {

    searchMobileNot(() => {
        $('.arrow').slideToggle();
    });

    //функция снятия жирного шрифта при щелчке на левое меню
    const removeNavBuhActive = () => $(".btn-buh").removeClass('nav-buh-active');

    // применение жирного шрифта при щелчке на левое меню
    $(".btn-buh").click(function () {
        removeNavBuhActive();
        $(this).addClass('nav-buh-active');
    });

    //показать стрелку на мобильном 
    function hideBtnBuh() {
        searchMobileNot(() => {
            $('.btn-hide').hide(350);
            $('.bi-arrow-left').attr('visibility', 'visible');
            $('.arrow').slideToggle();
        });
    }

    //убрать стрелку на мобильном
    $(".bi-arrow-left").click(function () {
        $('.btn-hide').show();
        $('.bi-arrow-left').attr('visibility', 'hidden');
        $('.arrow').slideToggle();
        clearDiv();
        removeNavBuhActive();
    });

    function clearDiv() {
        document.getElementById('results').innerHTML = '';
    }

    //обработка кнопок
    $('.buttons-buh li button').bind('click', function () {
        sessionStorage.setItem('buttonsBuhLiButton', '#' + this.id);
        // все кнопки с бухгалтера disabled
        document.querySelectorAll(".btn-buh").forEach(btn => btn.disabled = true);

        switch ('#' + this.id) {
            case '#buttonBuh':
                buttonClickBuh();
                break;
            case '#buttonNevistavleno':
                startDataNevistvleno();
                break;
            case '#buttonNeoplacheno':
                startDataNeoplacheno();
                break;
            case '#buttonVraboteR':
                startDataVraboteR();
                break;
            case '#buttonVraboteT':
                startDataVraboteT();
                break;
            case '#buttonTermSum':
                buttonClickTermSum();
                break;
            case '#buttonSotr2':
                startDataSotr2();
                break;
            case '#buttonDateSost':
                buttonClickDateSost();
                break;
            case '#buttonInspektor':
                buttonClickInspektor();
                break;
            case '#buttonCashe':
                buttonClickCashe();
                break;
        }
    });
}

export default buhgalterExport;