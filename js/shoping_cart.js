//Функція кнопки плюсування кількості товару в корзині
const btn_plus = document.querySelectorAll('.btn-plus-shoping-cart');
let newProductCountPlus = 0;
let allPrice = 0;
for (let i = 0; i < btn_plus.length; i++) {
    btn_plus[i].addEventListener('click', function () {
        let productCountPlus = +btn_plus[i].parentElement.parentElement.querySelector('.buttom-plus-minus-shoping-cart').textContent.replace(/\s/g, "");
        let countChanage = btn_plus[i].parentElement.querySelector('.count');
        let productId = btn_plus[i].parentElement.parentElement.querySelector('.id-product-in-shoping-cart').textContent;
        let productPrice = +btn_plus[i].parentElement.parentElement.querySelector(".product_price-in-shoping-cart").textContent;
        allPrice = +btn_plus[i].parentElement.parentElement.querySelector(".all_price").textContent;
        let allPriceOld = btn_plus[i].parentElement.parentElement.querySelector(".all_price");

        if (newProductCountPlus == 0) {
            newProductCountPlus = ++productCountPlus;
            allPrice = newProductCountPlus * productPrice;
        }
        else {
            newProductCountPlus = ++productCountPlus;
            allPrice = newProductCountPlus * productPrice;
        }
        countChanage.innerHTML = ` ${newProductCountPlus} `;
        allPriceOld.innerHTML = `${allPrice}`;
        fullPriceChange();
        grayStyleMinus();

        $.ajax({
            method: "POST",
            url: "../PHP_requests/shop_cart_change.php",
            data: {
                count: newProductCountPlus,
                id: productId,
                price: productPrice
            }
        })
            .done(function () {
                // alert("Data Saved: " + msg);
            });
    });
};

//Функція кнопки мінусування кількості товару в корзині
const btn_minus = document.querySelectorAll('.btn-minus-shoping-cart');
const minValue = 1;
for (let i = 0; i < btn_minus.length; i++) {
    btn_minus[i].addEventListener('click', function () {
        let productCountPlus = +btn_minus[i].parentElement.parentElement.querySelector('.buttom-plus-minus-shoping-cart').textContent.replace(/\s/g, "");
        let countChanage = btn_minus[i].parentElement.querySelector('.count');
        let productId = btn_minus[i].parentElement.parentElement.querySelector('.id-product-in-shoping-cart').textContent;
        let productPrice = +btn_minus[i].parentElement.parentElement.querySelector(".product_price-in-shoping-cart").textContent;
        allPrice = +btn_minus[i].parentElement.parentElement.querySelector(".all_price").textContent;
        let allPriceOld = btn_minus[i].parentElement.parentElement.querySelector(".all_price");

        if (newProductCountPlus == 0) {
            newProductCountPlus = test_min(--productCountPlus, minValue);
            allPrice = newProductCountPlus * productPrice;
        }
        else {
            newProductCountPlus = test_min(--productCountPlus, minValue);;
            allPrice = newProductCountPlus * productPrice;
        }
        countChanage.innerHTML = ` ${newProductCountPlus} `;
        allPriceOld.innerHTML = `${allPrice}`;
        
        fullPriceChange();
        grayStyleMinus();

        $.ajax({
            method: "POST",
            url: "../PHP_requests/shop_cart_change.php",
            data: {
                count: newProductCountPlus,
                id: productId,
                price: productPrice
            }
        })
            .done(function () {
                // alert("Data Saved: " + msg);
            });
    });
};

//Функція для перевірки мінімального значення кількості товару в корзині. Якщо 1,
//то значення не змінюється
function test_min(myValue, minValue) {
    if (myValue < minValue) {
        myValue = minValue;
    }
    return myValue;
}

//Блок з кнопкою видалення товару із кошика (крестик)
const btn_del = document.querySelectorAll('.delete-shoping-cart');
for (let i = 0; i < btn_del.length; i++) {
    btn_del[i].addEventListener('click', function () {
        let productId = btn_del[i].parentElement.querySelector('.id-product-in-shoping-cart').textContent;
        let productIdToDelete = btn_del[i].parentElement;
        productIdToDelete.remove();
        fullPriceChange();
        $.ajax({
            method: "POST",
            url: "../PHP_requests/shop_cart_del.php",
            data: {
                id: productId
            }
        })
            .done(function () {
                // alert("Data Saved: " + msg);
            });
    });
};

//Функція, яка показує на кнопці всю сумму товару
let fullPriceNumber;
function fullPriceChange() {
    const fullPrice = document.querySelector('#full-price');
    fullPriceNumber = 0;
    const fullPriceItem = document.querySelectorAll('.all_price');
    const hideBlock = document.querySelector('.no-item');
    const hideBtn = document.querySelector('.send');
    if (fullPriceItem.length == 0) {
        hideBlock.style.display = '';
        fullPrice.innerHTML = ``
        hideBtn.style.display = 'none';
    } else {
        hideBlock.style.display = 'none';
        hideBtn.style.display = '';
    }

    for (let i = 0; i < fullPriceItem.length; i++) {
        fullPriceNumber += +fullPriceItem[i].textContent;
        fullPrice.innerHTML = ` = ${fullPriceNumber} грн`;
    }
}

fullPriceChange();
grayStyleMinus();

//Функциія яка робить в карточці товару мінус сірим, коли там одиниця
function grayStyleMinus() {
    const searchBtn = document.querySelectorAll('.btn-minus-shoping-cart');
    for (let i = 0; i < searchBtn.length; i++ ) {
    const editSpan = searchBtn[i].querySelector('span');
    const chekCount = searchBtn[i].parentElement.textContent.replace(/\s/g, "");
    if (chekCount == 1) {
        editSpan.style.backgroundColor = '#212327';
    }
    else {
        editSpan.style.backgroundColor = '';
    }
    }
}

//Кнопка отправить
const btn_send = document.querySelector('.send');
btn_send.addEventListener('click', function () {
    $.ajax({
        method: "POST",
        url: "../PHP_requests/send.php",
    })
        .done(function () {
            // alert("Data Saved: " + msg);
        });
        alert('Ваш заказ отправлен. Ожидайте звонка от нашего менеджера')
        location.reload();
});