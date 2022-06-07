(function () {
    "use strict";

    window.addEventListener('load', start);

    function start() {
        id("encrypt-it").addEventListener("click", encrypted);
        id("reset").addEventListener("click", resetTextArea);
        id("reset").addEventListener("click", resetResultArea);
        id("12pt").addEventListener("click", size12pt);
        id("24pt").addEventListener("click", size24pt);

    }

    function id(idName) {
        return document.getElementById(idName);
    }

    function encrypted() {
        //is shiftcipher?
        if (id("cipher-type").value == "shift") {
            if (id("all-caps").checked == true) {
                var ciphermesaj = id("input-text").value;
                var mesaj = shiftCipher(ciphermesaj);
                var newM = mesaj.toUpperCase();
                id("result").innerHTML = newM;
                id("input-text").innerHTML = ciphermesaj.toUpperCase();
            }
            else {
                var ciphermesaj = id("input-text").value;
                var mesaj = shiftCipher(ciphermesaj);
                id("result").innerHTML = mesaj;
            }
        }

        //is generatecipher?
        else if (id("cipher-type").value == "random") {
            if (id("all-caps").checked == true) {
                var ciphermesaj = id("input-text").value;
                var mesaj = generateCipher(ciphermesaj);
                var newM = mesaj.toUpperCase();
                id("result").innerHTML = newM;
                id("input-text").innerHTML = ciphermesaj.toUpperCase();
            }
            else {
                var ciphermesaj = id("input-text").value;
                var mesaj = generateCipher(ciphermesaj);
                id("result").innerHTML = mesaj;
            }
        }
    }

    function resetTextArea() {
        var mesaj = id("input-text");
        mesaj.value = ' ';
    }

    function resetResultArea() {
        var result = id("result").innerHTML = '';

    }

    function size12pt() {
        id("input-text").style.fontSize = "12pt";
        id("result").style.fontSize = "12pt";
    }

    function size24pt() {
        id("input-text").style.fontSize= "24px" ;
        id("result").style.fontSize = "24pt";
    }




})();