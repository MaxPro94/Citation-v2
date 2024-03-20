let mail_user = document.querySelector('#email')

let pwd_user = document.querySelector('#password')

let pwd_user2 = document.querySelector('#password2')

let pseudo_user = document.querySelector('#pseudo')

let lastname_user = document.querySelector('#lastname')

let firstname_user = document.querySelector('#firstname')

const mail_word = '@' // Mise en place de cette variable afin de contrôler l'e-mail

const mail_word2 = '.'

// Je définit les caractères spéciaux demander pour le mot de passe
const pwd_car = ['!', '*', '&', '$', '#', '%', '&', '_', '-', '+']

let submit_btn = document.querySelector('#btn')


// Je vérifie si l'e-mail renseigner comporte bien un @ et si il existe déjà en BDD.
mail_user.addEventListener("blur", function(e){
    if(mail_user.value.includes(mail_word,  mail_word2)){
        document.querySelector('#succes_mail').innerHTML = "L'e-mail est valide"
        document.querySelector('#alert_mail').innerHTML = ""
        fetch('?page=controle_inscri&mail=' + this.value)
        .then(function(response){
            return response.json()
        })
        .then(function(resultat){
            if(resultat[0].nb == 1){
                console.log(resultat)
                document.querySelector('#succes_mail').innerHTML = ""
                document.querySelector('#alert_mail').innerHTML = "Cet e-mail est déjà enregistrer"
            } else {
                document.querySelector('#alert_mail').innerHTML = ""
                document.querySelector('#succes_mail').innerHTML = "Cet e-mail est disponible"
            }
        })
    } else {
        document.querySelector('#succes_mail').innerHTML = ""
        document.querySelector('#alert_mail').innerHTML = "L'e-mail doit être au bon format"
        mail_user.focus()
    }
})


// Vérification si le lastname comporte plus d'une lettre.
lastname_user.addEventListener("blur", function(){
    if(lastname_user.value.length <= 1 ){
        document.querySelector('#alert_lastname').innerHTML = "Un nom doit comporter au moins 1 caractère"
        document.querySelector('#succes_lastname').innerHTML = ""
    } else {
        document.querySelector('#succes_lastname').innerHTML = "Nom valide !"
        document.querySelector('#alert_lastname').innerHTML = ""
    }
})

// Vérification si le firstname comporte plus d'une lettre
firstname_user.addEventListener("blur", function(){
    if(firstname_user.value.length <= 1 ){
        document.querySelector('#alert_firstname').innerHTML = "Un prénom doit comporter au moins 1 caractère"
        document.querySelector('#succes_firstname').innerHTML = ""
    } else {
        document.querySelector('#succes_firstname').innerHTML = "Prénom valide !"
        document.querySelector('#alert_firstname').innerHTML = ""
    }
})

// Vérification de si le pseudo comporte plus d'une lettre
pseudo_user.addEventListener("blur", function(){
    if(pseudo_user.value.length <= 1 ){
        document.querySelector('#alert_pseudo').innerHTML = "Un pseudo doit comporter au moins 1 caractère"
        document.querySelector('#succes_pseudo').innerHTML = ""
    } else {
        document.querySelector('#succes_pseudo').innerHTML = "Pseudo valide !"
        document.querySelector('#alert_pseudo').innerHTML = ""
    }
})


// Vérification si le mot de passe comporte bien un des caractère spécial demander.
pwd_user.addEventListener("blur", function(){
    if(pwd_user.value.length < 8 ){
        document.querySelector('#alert_pwd').innerHTML = "Le mot de passe doit comporter un minimum de 8 caractères"
        document.querySelector('#succes_pwd').innerHTML = ""
    } else {
        if(pwd_car.some(word => pwd_user.value.includes(word))){ // some() verifie si il y'a au moins une des valeurs du tableau pwd_car dans le mot de passe utilisateur
            document.querySelector('#succes_pwd').innerHTML = "Le mot de passe est accépté"
            document.querySelector('#alert_pwd').innerHTML = ""
        } else {
            document.querySelector('#alert_pwd').innerHTML = "Le mot de passe doit comporté au minimum un des caractères suivant: !, *, &, $, #, %, &, _, -, +"
            document.querySelector('#succes_pwd').innerHTML = ""
        }
    }
    
})

// Vérification si les deux mot de passe sont identiques.
submit_btn.addEventListener("click", function(e){
    e.preventDefault() // On demande a js de ne pas utiliser le btn submit comme il le fait par défaut.

    if(pwd_user.value === pwd_user2.value){
        document.querySelector('#succes_pwd').innerHTML = "Les mots de passes sont identiques"
        document.querySelector('#alert_pwd').innerHTML = ""
        document.querySelector('#form_inscription').submit()
    } else {
        document.querySelector('#alert_pwd').innerHTML = "Les mots de passe ne sont pas identiques !"
        document.querySelector('#succes_pwd').innerHTML = ""
    }
    
})


