


/*  function buildDatalistCashe() {
     google.script.run.withSuccessHandler((arrayOfArrays) => {
         afterDropDownReturned(arrayOfArrays, 'description_cashe-datalist')
         // все кнопки с бухгалтера enabled
         document.querySelectorAll(".btn-buh").forEach(btn => btn.disabled = false);
     }).getDropDownArrayDescriptionCashe();

     google.script.run.withSuccessHandler((arrayOfArrays) => {
         afterDropDownReturned(arrayOfArrays, 'remark_cashe-datalist')
         // все кнопки с бухгалтера enabled
         document.querySelectorAll(".btn-buh").forEach(btn => btn.disabled = false);
     }).getDropDownArrayremarkCashe(); 
 } */




 







 // строим форму ввода
 export const buttonClickCashe = () => {
    //   buildDatalistCashe();
    //   spinner('results');
    //   hideBtnBuh(); // включение выпадающего окна со стрелкой на мобильном
    const temp = document.querySelector('#cashe_forma');
    console.log(temp);
    
    const clon = temp.content.cloneNode(true);
    const result = document.querySelector('#results');
    if (result.firstChild) {
        while (result.firstChild) {
            result.removeChild(result.firstChild);
        }
    }
    result.appendChild(clon);
    document.getElementById('button_cashe_input').addEventListener('click', buttonInput);
}



    // обработка кнопки ввод
/* const buttonInput = () => {
    document.getElementById("button_cashe_input").disabled = true;
    const description = document.querySelector('#summa_cashe').value;
    const waste = document.querySelector('#waste_cashe').value ? +document.querySelector('#waste_cashe').value : "";
    const arrival = document.querySelector('#arrival_cashe').value ? +document.querySelector('#arrival_cashe').value : "";
    const prim = document.querySelector('#prim_cashe').value;
    const data = [[description, waste, arrival, prim]]; */

        // проверяем на пустые поля
/*         if (searchStop(data.flat())) {
            alert('Не введены данные')
            document.getElementById("button_cashe_input").disabled = false;
            return;
        } */
        // конец проверки на пустые поля

/*         google.script.run.withSuccessHandler(() => {
            document.getElementById("button_cashe_input").disabled = false;
            // clearCashe();
        }).insertRowCache(data);
    } */

    // cрабатывание кнопки Ввод по нажатии кнопки Enter
/*     function clickPressCasheEnter(event) {
        if (event.keyCode == 13) {
            buttonInput()
        }
    } */
