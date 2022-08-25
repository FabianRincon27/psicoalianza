var btn_add = document.getElementById("btn_add");
var form_add = document.getElementById("form_add");

btn_add.addEventListener("click", function () {
    var name = document.getElementById("name");
    var errorName = document.getElementById("errorName");
    var lastname = document.getElementById("lastname");
    var errorLastname = document.getElementById("errorLastname");
    var num_document = document.getElementById("num_document");
    var errorNumdocument = document.getElementById("errorNumdocument");
    var address = document.getElementById("address");
    var errorAddress = document.getElementById("errorAddress");
    var city = document.getElementById("city");
    var errorCity = document.getElementById("errorCity");
    var phone = document.getElementById("phone");
    var errorPhone = document.getElementById("errorPhone");

    var cont = 0;

    if (name.value.length <= 0) {
        errorName.classList.remove("visually-hidden");
    } else {
        errorName.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (lastname.value.length <= 0) {
        errorLastname.classList.remove("visually-hidden");
    } else {
        errorLastname.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (num_document.value.length <= 0) {
        errorNumdocument.classList.remove("visually-hidden");
    } else {
        errorNumdocument.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (address.value.length <= 0) {
        errorAddress.classList.remove("visually-hidden");
    } else {
        errorAddress.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (city.value.length <= 0) {
        errorCity.classList.remove("visually-hidden");
    } else {
        errorCity.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (phone.value.length <= 0) {
        errorPhone.classList.remove("visually-hidden");
    } else {
        errorPhone.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (cont === 6) {
        form_add.submit();
    }
});
