const mail = document.querySelector('#mail')
const lastname = document.querySelector('#lastname')
const firstname = document.querySelector('#firstname')
const pseudo = document.querySelector('#pseudo')
const pwd = document.querySelector('#pwd')
const pwd2 = document.querySelector('#pwd2')
const choice_secret_question = document.querySelector('#secret_question')
const secret_question_response = document.querySelector('#secret_question_response')
const mySubmit = document.querySelector('#submit_inscription')
const error_mail = document.querySelector('#error_mail')
const error_lastname = document.querySelector('#error_lastname')
const error_firstname = document.querySelector('#error_firstname')
const error_pseudo = document.querySelector('#error_pseudo')
const error_pwd = document.querySelector('#error_pwd')
const error_pwd2 = document.querySelector('#error_pwd2')
const error_question = document.querySelector('#error_question')
const error_submit = document.querySelector('#error_form')
const check_color_secret_question = document.querySelector('#color_secret_question')
const check_color_mail = document.querySelector("#color_mail")
const check_color_lastname = document.querySelector("#color_lastname")
const check_color_firstname = document.querySelector("#color_firstname")
const check_color_pseudo = document.querySelector("#color_pseudo")
const expressionReguliereMail = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
const expressionReguliereMdp = /^(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*[\W_]){1,}).{6,}$/
let validation = 7

check_color_mail.addEventListener("click", function(e){
    e.preventDefault()
})
mail.addEventListener("blur", function(e){
    if(mail.value.trim().length == 0){
        error_mail.innerHTML = "Le champs e-mail est obligatoire";
        check_color_mail.setAttribute("value", "#dc3545");

    } else {

        if (expressionReguliereMail.test(mail.value)) {
            error_mail.innerHTML = ""
            fetch('/api.php?action=check-user&mail=' + this.value)
            .then(function(response){
                return response.json()
            })
            .then(function(resultat){

                if(resultat.nb == 1){
                    check_color_mail.setAttribute("value", "#dc3545");
                    error_mail.innerHTML = "Cette adresse mail existe déjà";
                    validation += 1
                } else {
                    check_color_mail.setAttribute("value", "#198754");          
                    validation -= 1
                    error_mail.innerHTML = ""
                }
            })
        } else {
            check_color_mail.setAttribute("value", "#dc3545");
            error_mail.innerHTML = "L'adresse mail n'est pas valide";
            validation += 1
        }
    }
})

check_color_lastname.addEventListener("click", function(e){
    e.preventDefault()
})
lastname.addEventListener("blur", function(e){
    if(lastname.value.trim().length <= 1){
        error_lastname.innerHTML = "Le nom doit comporter plus d'une lettre";
        check_color_lastname.setAttribute("value", "#dc3545");
        validation += 1


    } else {
        check_color_lastname.setAttribute("value", "#198754");
        validation -= 1
        error_lastname.innerHTML = "";
    }
    
})

check_color_firstname.addEventListener("click", function(e){
    e.preventDefault()
})
firstname.addEventListener("blur", function(e){
    if(firstname.value.trim().length <= 1){
        error_firstname.innerHTML = "Le prénom doit comporter plus d'une lettre";
        check_color_firstname.setAttribute("value", "#dc3545");
        validation += 1
    } else {
        check_color_firstname.setAttribute("value", "#198754");
        validation -= 1
        error_firstname.innerHTML = "";
    }

    
})

check_color_pseudo.addEventListener("click", function(e){
    e.preventDefault()
})
pseudo.addEventListener("blur", function(e){
    if(pseudo.value.trim().length <= 1){
        error_pseudo.innerHTML = "Le pseudo doit comporter plus d'une lettre";
        check_color_pseudo.setAttribute("value", "#dc3545");
        validation += 1
    } else {
        check_color_pseudo.setAttribute("value", "#198754");
        validation -= 1
        error_pseudo.innerHTML = "";
    }

    
})


pwd.addEventListener("blur", function(e){ 

    if(pwd.value.length > 0){

        if(expressionReguliereMdp.test(pwd.value) == false){
            error_pwd.innerHTML = "Votre mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un caractère spécial et être d'au moins 6 caractères de long.";
            validation += 1
        } else {
            validation -= 1
            error_pwd.innerHTML = "";
        }
    } else {
        error_pwd.innerHTML = "Veuillez renseigner un mot de passe"
        validation += 1
    }


})

pwd2.addEventListener("blur", function(e){

    if(pwd2.value.length > 0){
        if(expressionReguliereMdp.test(pwd2.value) == false){
            error_pwd2.innerHTML = "Le mot de passe renseigné doit contenir entre 6 et 32 caractères avec des minuscules, des MAJUSCULES et des caractères spéciaux comme @, $, €, *, ^, §, %, &.";
            validation += 1
        }
        if(pwd2.value == pwd.value){
            validation -= 1
            error_pwd2.innerHTML = "";
    
        } else {
            error_pwd2.innerHTML = "Les mots de passe ne correspondent pas";
            validation += 1
        }
    } else {
        error_pwd2.innerHTML = "Veuillez remplir la verification de votre mot de passe";
        validation += 1
    }


})

// const check_color_secret_question = document.querySelector('#color_secret_question')
// const choice_secret_question = document.querySelector('#secret_question')
// const secret_question_response = document.querySelector('#secret_question_response')
// const error_question = document.querySelector('#error_question')

secret_question_response.addEventListener('blur', function(e){
    if(secret_question_response.value.trim().length < 1){
        error_question.innerHTML = "Veuillez entrer un reponse a la question secrète."
        check_color_secret_question.setAttribute("value", "#dc3545")
        validation += 1 
    } else {
        error_question.innerHTML = "";
        check_color_secret_question.setAttribute("value", "#198754")
        validation -= 1
    }
})


mySubmit.addEventListener("click", function(e){
    e.preventDefault()
    
    if(validation > 0){
        error_submit.innerHTML = "Veuillez remplir tout les champs requis";
    } else {
        if(validation < 0){
            document.querySelector('#form').submit()
        }
    }

})




