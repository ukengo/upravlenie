/* function buttonClickBuh() {
    clearDiv();
    spinner('results');
    hideBtnBuh();
    google.script.run.withSuccessHandler(displayResults).buhgalterTable();
    btnTableFinance();
}

function displayResults(dataArray) {
    if (dataArray) {
        let result = "<table class='table table-striped table-sm'>"
        for (let i = 0; i < dataArray.length; i++) {
            result += "<tr>";
            for (var j = 0; j < dataArray[i].length; j++) {
                result += "<td>" + dataArray[i][j] + "</td>";
            }
            result += "</tr>";
        }
        result += "</table>";
        result = "<h3 class='d-flex justify-content-center'>Счета выставлены</h3>" + result;
        let div = document.getElementById('results');
        div.innerHTML = result;
    } else {
        let div = document.getElementById('results');
        div.innerHTML = "Data not found!";
    }
    // все кнопки с бухгалтера enabled
    document.querySelectorAll(".btn-buh").forEach(btn => btn.disabled = false);
} */