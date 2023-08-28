const btn_add = document.querySelectorAll('.product-button');
for (let i = 0; i < btn_add.length; i++) {
    btn_add[i].addEventListener('click', function () {
        const productBox = btn_add[i].parentElement.parentElement;
        const nameProduct = productBox.querySelector('.offer-title').textContent;
        const price = +productBox.querySelector('#price').textContent;
        const idValue = +productBox.querySelector('#id-product').textContent;
        const img = productBox.querySelector('.offer-image');
        const imgSrc = img.getAttribute('src');
        const countValue = 1;
        console.log(nameProduct, price, idValue, countValue, imgSrc)
        $.ajax({
            method: "POST",
            url: "../PHP_requests/shoping_cart_add.php",
            data: {
                name: nameProduct,
                price: price,
                cont: countValue,
                id: idValue,
                imgValue: imgSrc
            }
        })
            .done(function () {
                // alert("Data Saved: " + msg);
            });
    });
};