function btnAdd(button) {
    var soLuong = parseInt(button.previousElementSibling.value) + 1;
    if (!soLuong) {
        button.previousElementSibling.value = 1;
        return;
    }
    button.previousElementSibling.value = soLuong;
    calcPrice();
}

function btnMinutes(button) {
    var soLuong = parseInt(button.nextElementSibling.value) - 1;
    if (soLuong <= 1) {
        soLuong = 1;
    }
    button.nextElementSibling.value = soLuong;
    calcPrice();
}

function calcPrice() {
    var soLuong = document.getElementsByName('soluong');
    var price = document.getElementsByName('price');

    var sum = 0;
    console.log(soLuong[0].value, price[0].innerHTML);
    for (let i = 0; i < soLuong.length; i++) {
        sum += price[i].value * soLuong[i].value;

    }

    var tongtien = document.getElementsByName('tongtien');
    const numberFormat = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
    });
    for (let i = 0; i < tongtien.length; i++) {
        tongtien[i].innerHTML = String(numberFormat.format(sum));
    }
}

function refresh() {
    window.onload = function() {
        if (!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
}