let categoryItemsArr = document.querySelector(".category-items-arr");

let buyEquipmentEntryWrap = document.querySelector(".buy-equipment-wrap");
let buyEquipmentWrapDecorImg = document.querySelector(".buy-equipment-wrap-decor img");
let buyEquipmentBtnClose = document.querySelector(".buy-equipment-wrap-btnClose");

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
    buyEquipmentEntryWrap.classList.add('open');
    document.body.style.overflow = "hidden";
    buyEquipmentWrapDecorImg.src = event.target.src;
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






