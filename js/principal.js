var slideIndex = 0;
showSlides();


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2000);
}

function login() {
    var m = document.getElementById('campo-username').value;
    var p = document.getElementById('campo-senha').value;
    if (m == "username" && p == "123") {
        window.location.href = "index.html";
        window.alert("Bem vindo!");
    } else {
        window.alert("O utilizador ou a password encontram-se incorretos.");
    }
}

function validaform() {

    var username = document.getElementById("username");
    var senha = document.getElementById("senha");
    var email = document.getElementById("email");
    var telefone = document.getElementById("telefone");
    var senha2 = document.getElementById("senha2");
    var primeironome = document.getElementById("primeironome");
    var sobrenome = document.getElementById("sobrenome");


    if (username.value == "") {
        alert("Username nao informado");
    } else {
        if (senha.value == "") {
            alert("Senha nao Informada");
        } else {
            if (senha2.value == "" || senha2.value != senha.value) {
                alert("Senha nao informado ou senhas diferentes")
            } else {
                if (email.value == "" || email.value.indexOf('@') == -1 || email.value.indexOf('.') == -1) {
                    alert("Email nao informado ou invalido")
                } else {
                    if (telefone.value == "" || telefone.value.length != 9) {
                        alert("Telefone nao informado ou incorreto")
                    } else {
                        if (primeironome.value == "") {
                            alert("Primeiro nome nao informado ou invalido")
                        } else {
                            if (sobrenome.value == "") {
                                alert("Sobrenome nao informado")
                            } else {
                                alert("Cadastrado com sucesso!")
                            }
                        }
                    }
                }
            }
        }
    }



}