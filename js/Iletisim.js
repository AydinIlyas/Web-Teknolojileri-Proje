function validateForm() {
    let name = document.forms.iletisim.ad.value;
    let soyad = document.forms.iletisim.soyad.value;
    let Cinsiyet = document.forms.iletisim.Cinsiyet.value;
    let yas = document.forms.iletisim.yas.value;
    let email = document.forms.iletisim.email.value;
    let telefon = document.forms.iletisim.telefon.value;
    let mesaj = document.forms.iletisim.mesaj.value;
    const cb = document.querySelector('#accept');
    var correct = true;
    var num = true;
    var mail = true;


    var error1 = "Doldurunuz!";
    if (name == "" || name == null) {
        document.getElementById('eksikAd').innerHTML = error1;
        correct = false;
    }
    else {
        document.getElementById('eksikAd').innerHTML = "";
    }
    if (soyad == "") {
        document.getElementById('eksikSoyad').innerHTML = error1;
        correct = false;


    }
    else {
        document.getElementById('eksikSoyad').innerHTML = "";

    }
    if (Cinsiyet == "") {
        document.getElementById('eksikCins').innerHTML = error1;
        correct = false;


    }
    else {
        document.getElementById('eksikCins').innerHTML = "";

    }
    if (yas == "") {
        document.getElementById('eksikYas').innerHTML = error1;

        correct = false;


    }
    else {
        if (isNaN(yas)) {
            document.getElementById('eksikYas').innerHTML = "Sayı giriniz!";
            num = false;

        }
        else {
            document.getElementById('eksikYas').innerHTML = "";
        }


    }
    if (email == "") {
        document.getElementById('eksikEmail').innerHTML = error1;
        correct = false;


    }
    else {

        if (validateEmail(email)) {
            document.getElementById('eksikEmail').innerHTML = "";

            mail = true;

        }
        else {
            document.getElementById('eksikEmail').innerHTML = "Email geçersiz!";
            mail = false;

        }

    }
    if (telefon == "") {
        document.getElementById('eksikTelefon').innerHTML = error1;
        correct = false;


    }
    else {
        if (isNaN(telefon)) {
            document.getElementById('eksikTelefon').innerHTML = "Numara gecersiz!";
            num = false;

        }
        else {
            document.getElementById('eksikTelefon').innerHTML = "";
        }

    }
    if (mesaj == "") {
        document.getElementById('eksikMesaj').innerHTML = error1;
        correct = false;


    }
    else {
        document.getElementById('eksikMesaj').innerHTML = "";

    }
    if(!cb.checked)
    {
        document.getElementById('eksikOnay').innerHTML = "Kabul edilmelidir!";
        correct=false;

    }
    else{
        document.getElementById('eksikOnay').innerHTML = "";

    }
    if (correct == true && num == true && mail == true) {
        return true;
    }
    else {
        return false;
    }




}
const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };