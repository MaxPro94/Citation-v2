const select_auteur = document.querySelector("#auteur_to_update")

select_auteur.addEventListener("change", function(){
    fetch("/api.php?action=check_auteur&auteur=" + this.value)
    .then(function(response){
        return response.json()
    })
    .then(function(resultat){

        let lastname = document.querySelector("#update_lastname_auteur")
        let firstname = document.querySelector("#update_firstname_auteur")
        let naissance = document.querySelector("#update_naissance_auteur")
        let deces = document.querySelector("#update_deces_auteur")
        let photo = document.querySelector("#update_picture_auteur")
        let description = document.querySelector("#update_description_auteur")
        let biographie = document.querySelector("#update_biographie_auteur")

        lastname.value = resultat.nom
        firstname.value = resultat.prenom
        naissance.value = resultat.date_start
        deces.value = resultat.date_end
        photo.innerHTML = resultat.photo
        description.innerHTML = resultat.description
        biographie.innerHTML = resultat.biographie

    })
})

