let categoryItemsArr = document.querySelector(".category-items-arr");
let categoryItemsArrCtx = document.querySelectorAll(".category-items-arr-ctx");

let buyEquipmentEntryWrap = document.querySelector(".buy-equipment-wrap");
let buyEquipmentWrapDecorImg = document.querySelector(".buy-equipment-wrap-decor img");
let buyEquipmentBtnClose = document.querySelector(".buy-equipment-wrap-btnClose");

let inputText = document.querySelector('buy-equipment-entry-wrap-decor-form-dataProcecing, input[name="infoOrder"]');
let ordersList = document.getElementById('orders');
let optionsList = document.querySelectorAll('datalist option');

let inputCheckbox = document.querySelector('buy-equipment-entry-wrap-decor-form-dataProcecing, input[type="checkbox"]');
let button = document.querySelector('buy-equipment-entry-wrap-decor-form, button');

//Включать или отключать кнопку
inputCheckbox.addEventListener('change', function (event) {
    if (event.target.checked == true) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
});

//Открытие окна при нажатии по одной из продукции
categoryItemsArr.addEventListener('click', function (event) {
    if (event.target.src === undefined) {
        return true;
    }
    buyEquipmentEntryWrap.classList.add('open');
    document.body.style.overflow = "hidden";
    buyEquipmentWrapDecorImg.src = event.target.src;
    buyEquipmentWrapDecorImg.alt = event.target.alt;
    inputText.textContent = event.target.alt;
});


//Закрытие окна по кнопке Esc
window.addEventListener('keydown', (e) => {
    if (e.key === "Escape") {
        buyEquipmentEntryWrap.classList.remove("open")
        document.body.style.overflow = "auto";
    }
});

buyEquipmentBtnClose.addEventListener('click', function () {
    buyEquipmentEntryWrap.classList.remove('open');
    document.body.style.overflow = "auto";
});

//Изменение картинки в зависимости от list
inputText.addEventListener('focus', function () {
    ordersList.style.display = "block";
    
    document.body.addEventListener('click', function (event) {
        if (event.target != inputText) {
            ordersList.style.display = "none";
        }
    });
});

inputText.addEventListener('keydown', function (event) {
    if (event.key === "Escape") {
        ordersList.style.display = "none";
    }
});


Array.from(ordersList.options).forEach(elem => {
    elem.addEventListener('click', () => {
        inputText.value = elem.value;
        let altImg = elem.value;
        //Меняем картинку при помощи сравнения alt у картинки и elem
        if(buyEquipmentWrapDecorImg.alt != elem.value){
            categoryItemsArrCtx.forEach(elem => {
                if (elem.alt == altImg) {
                    buyEquipmentWrapDecorImg.src = elem.src;
                    buyEquipmentWrapDecorImg.alt = elem.alt;
                }
            });
        }
    });
});

//Работа с ajax и отправка данных (Jquery)
/*$('.buy-equipment-wrap-decor-form').submit(function () {
    $.ajax({
        url: 'incs/ajaxProcecing.php',
        type: "post",
        method: 'POST',
        data: { 'infoOrder': inputText },
        success: function () {
            alert("Всё прошло удачно")
        },
        datatype: "String"
    });
});*/