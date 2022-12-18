function btnAdd(button) {
    console.log("1");
    var soLuong = parseInt(button.previousElementSibling.value) + 1;

    if (!soLuong) {
        button.previousElementSibling.value = 1;
        return;
    }

    button.previousElementSibling.value = soLuong;
}

function btnMinutes(button) {
    var soLuong = parseInt(button.nextElementSibling.value) - 1;

    if (soLuong < 0) {
        soLuong = 0;
    }
    button.nextElementSibling.value = soLuong;

    // var newPrice = price * soLuong;

    // const numberFormat = new Intl.NumberFormat('vi-VN', {
    //     style: 'currency',
    //     currency: 'VND',
    // });
    // console.log(newPrice);
    // document.getElementById("tong-tien").innerHTML = String(numberFormat.format(newPrice));
}

function xoa() {
    confirm('Bạn có muốn xóa không')
}

// function calcPrice(input) {

//     var soLuong = parseInt(input.parentNode.getElementsByTagName("input")[0].value);
//     if (!soLuong || soLuong < 0) {
//         input.value = 0;
//         soLuong = 0;
//     }

//     const price = input.parentNode.getElementById('price').innerHTML;
//     console.log(price);
//     var newPrice = price * soLuong;

//     // const format = newPrice.toString.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

//     input.parentNode.getElementById('price').innerHTML = newPrice;
//     // console.log(numberFormat.format(newPrice)); // 1,234,567,890

//     tinhTong()
// }